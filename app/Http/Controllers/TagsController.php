<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;
use Session;
class TagsController extends Controller
{
   public function index(){
    
   	return view('blog/admin/tags/index')->with('tags' , Tag::all());

   }
   public function create(){
   	
     
     return view('blog/admin/tags/create');
   	
   	// return view('blog/admin/tags/create')->with('app_info','Wellcome');


   }

   public function store(Request $request){

   	Tag::create([
     'name' => $request->name
   	]);
    Session::flash('app_info' ,'Tag Created Successfully');
    return redirect()->back();
   }

   public function edit($id){

     $tag =  Tag::find($id);
     return view('blog/admin/tags/edit')->with('tag',$tag);

   }
   public function update(Request $request,$id){

   		$tag = Tag::find($id);
   		$tag->name = $request->name;
   		$tag->save();
   		Session::flash('app_info' , 'Tag Updated Successfully');
   		return redirect()->route('tags');
   }
   public function destroy($id){

   	Tag::destroy($id);
   	Session::flash('app_info' , 'Tag Deleted Successfully');
    return redirect()->back();



   }
}
