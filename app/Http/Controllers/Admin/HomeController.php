<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admin\Categories;
use App\Admin\Posts;
use App\Admin\Tags;

class HomeController extends Controller
{
	 public function __construct()
    {
        $this->middleware('auth:admin');
        //$this->middleware('can:posts.tag');
    }
	public function index(){

		$posts= Posts::all();
		$categories = Categories::all();
		$tags = Tags::all();
		
	return view('admin/home',compact('tags','categories','posts'));	
	}
    
}
