<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin\Categories;
use App\Admin\Posts;
use App\Admin\Tags;
use App\Admin\Events;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $posts = DB::table('posts')->orderBy('updated_at','DESC')
    ->take(6)
    ->get();

        return view('front/home',compact('posts'));
    }
    public function about(){
         return view('front/about');
    }
     public function events(){
        $events= Events::all();
        return view('front/events',compact('events'));
        
    }
     public function services(){
        return view('front/services');
        
    }
     public function blog(){
  
   $posts = DB::table('posts')->orderBy('updated_at','DESC')
    ->take(6)
    ->get();

        return view('front/blog',compact('posts'));
        
    }
    public function learn(){
        return view('front/learn');
        
    }
      public function article($slug){
        //fetch the article image to use as a banner.
         $banner = DB::table('posts')->where('slug', $slug)->value('image');
         $article = DB::table('posts')->where('slug', $slug)->first();
         $posts = DB::table('posts')->orderBy('updated_at','DESC')
         ->take(6)
         ->get();
      $posts = Posts::where('slug', '!=', $slug)->take(6)->get();
        return view('front/article',compact('article','posts','banner'));
        
        
    }
}
