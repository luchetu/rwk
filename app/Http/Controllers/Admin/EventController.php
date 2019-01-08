<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Admin\Events;
use Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{

    
     public function __construct()
    {
        $this->middleware('auth:admin');
        //$this->middleware('can:posts.tag');
    }
    public function index()
    {
        $events= Events::all();
        return view('admin.event.show',compact('events'));   
    }

   
    public function create()
    {
        
           return view('admin.event.event');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title'=>'required',
            'date' => 'required',
            'image' => 'required',
            'venue' => 'required'
            ]);
           
        //handle file upload

        $success = "image uploaded successfully!";
        $fail = "you need an image!";
        if ($request->hasFile('image')) 
        {
           
           //Upload a copy to another folder
           $imageName = Storage::disk('uploads')->putFile('images',$request->file('image'));
           ##$url = Storage::disk('uploads')->url('file1.jpg');
        }

        else
        {
            
            return "Image not uploaded";
        }
        $event = new Events;
        $event->image = $imageName;
        $event->title = $request->title;
        $event->date = $request->date;
         $event->body = $request->body;
        $event->venue = $request->venue;
        $event->save();

        return redirect(route('event.index'));
    }

   
    public function show($id)
    {
        
    }

    
    public function edit($id)
    {
        
         $event= Events::where('id',$id)->first();
            return view('admin.event.edit',compact('event'));

       
        
    }

    
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'title'=>'required',
            'date' => 'required',
            'image' => 'required',
            'venue' => 'required'
            ]);
        if ($request->hasFile('image')) {
            $imageName = $request->image->store('public');
        }
         $event = Events::find($id);
        $event->image = $imageName;
        $event->title = $request->title;
        $event->date = $request->date;
        $event->venue = $request->venue;
        $event->body = $request->body;
        $event->save();

        return redirect(route('event.index'));
    }

   
    public function destroy($id)
    {
        Events::where('id',$id)->delete();
        return redirect()->back();
    }
}
