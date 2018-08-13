<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;
use App\Category;
use App\Post;


class FrontEndController extends Controller
{
    public function index(){
        $post = Post::all();
    	return view('blog/user/index')
        ->with('posts',$post)
    	->with('title', Setting::first()->name)
    	->with('categories' ,Category::take(4)->get())
    	->with('first_post',Post::orderBy('created_at','desc')->first())
    	->with('second_post',Post::orderBy('created_at','desc')->skip(1)->take(1)->get()->first())
    	->with('third_post',Post::orderBy('created_at','desc')->skip(2)->take(1)->get()->first())
        ->with('fourth_post',Post::orderBy('created_at','desc')->skip(3)->take(1)->get()->first())
    	->with('cat1' , Category::find(2))
        ->with('cat2' , Category::find(3))
        ->with('cat3' , Category::find(4))
        ->with('cat4' , Category::find(5))
        ->with('cat5' , Category::find(6))        
    	->with('cat6',Category::find(7));
          
    }
}
