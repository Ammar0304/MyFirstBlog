<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Post;



use Session;

class PostContorller extends Controller
{
    //
     public function __construct()
    {
        $this->middleware('auth');
    }

    public function posts(){
         $post = Post::all();
       
        return view('blog/admin/posts/index')->with('posts', $post );
    }
    public function index(){

    
    	 return view('blog/admin/index');
    }
    public function post(){
         

    	   $cat = Category::all();
         if($cat->count() == 0){
            Session::flash('app_info','you must have categories before attemting to create a post');

            return redirect()->back();
         }

    	 return view('blog/admin/post')->with('categories' , $cat);

    }
    public function create(Request $request){
        
             
        $this->validate($request,[
        	'title' => 'required',
        	'featured' => 'required|image',
        	'content' => 'required'
            
        ]);

  
        $featured = $request->featured;
       
        $featured_new_name = time().$featured->getClientOriginalName();
      

        $featured->move('uploads/posts', $featured_new_name);

        $post = Post::create([

            'title' => $request->title,
            'content' => $request->content,
            'featured' => 'uploads/posts/' .$featured_new_name,
            'category_id' => $request->category_id


        ]);
        
        

        Session::flash('app_info','Post Created Successfully');

        $data = $request->all();
        return redirect()->back();

      
       
    }
    public function delete($id){

        $data = Post::find($id);
        $data->delete();
        Session::flash('app_info','Post Deleted Successfully');
        return redirect()->back();

    }
    public function edit($id){
         $cat = Category::all();
     
         $data = Post::find($id);
        return view('blog/admin/posts/edit')->with('data', $data)->with('categories',$cat);


    }
    public function update(Request $request,$id){

     
        $post = Post::find($id);

        if($request->hasFile('featured')){

        $featured = $request->featured;
        $featured_new_name = time().$featured->getClientOriginalName();
        $featured->move('uploads/posts', $featured_new_name);
        $post->featured = 'uploads/posts/'.$featured_new_name ;
        }

        $post->title = $request->title;
        $post->content = $request->content;
        $post->category_id = $request->category_id;
        $post->save();

        Session::flash('app_info','Post Successfully Updated');
        return redirect()->route('post');

    }
}

