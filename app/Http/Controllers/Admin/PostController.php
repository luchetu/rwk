<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Admin\Categories;
use App\Admin\Posts;
use App\Admin\Tags;
use Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct()
    {
        $this->middleware('auth:admin');
        //$this->middleware('can:posts.tag');
    }
    public function index()
    {
        $posts = Posts::all();
        return view('admin.post.show',compact('posts'));   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
           $tags =tags::all();
            $categories =categories::all();
            return view('admin.post.post',compact('tags','categories'));
       
        return redirect(route('admin.home'));
        
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
            'body' => 'required',
            'image' => 'required',
            ]);
        //handle file upload
        if ($request->hasFile('image')) 
        {
           //$imageName = $request->file('image')->store('public/products');
           //Upload a copy to another folder
          // $imageName = Storage::disk('uploads')->putFile('products',$request->file('image'));
          $product_image = $request->file('image');
          //resize
          $img = Image::make($product_image)->fit(400,200, function($constraint){
              $constraint->upsize();
          })->encode('jpg');
          $image_name = "one_".time().'jpg';
          $img->save('uploads/products/'.$image_name);
          //Upload a copy to another folder
          //$imageName = Storage::disk('uploads')->put('products',$img->save($image_name));
          # Update the database
          $imageName = 'products/'.$image_name;
           
           ##$url = Storage::disk('uploads')->url('file1.jpg');
        }
        else
        {
            return 'Please select image';
        }
        $post = new posts;
        $post->image = $imageName;
        $post->title = $request->title;
        $post->subtitle = $request->subtitle;
        $post->slug = str_slug($request->title, '-');
        $post->body = $request->body;
        $post->status = $request->status;
        $post->tag_id=$request->tag_id;
        $post->cat_id=$request->category_id;
        $post->save();

        return redirect(route('post.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
         $post = Posts::where('id',$id)->first();
            $tags =Tags::all();
            $categories =Categories::all();
            return view('admin.post.edit',compact('tags','categories','post'));

       
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'title'=>'required',
           
            'body' => 'required',
            'image'=>'required'
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
        $post = Posts::find($id);
       $post->image = $imageName;
        $post->title = $request->title;
        $post->subtitle = $request->subtitle;
         $post->slug = str_slug($request->title, '-');
        $post->body = $request->body;
        $post->status = $request->status;
        $post->tag_id=$request->tag_id;
        $post->cat_id=$request->category_id;
        $post->save();

        return redirect(route('post.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Posts::where('id',$id)->delete();
        return redirect()->back();
    }
}
