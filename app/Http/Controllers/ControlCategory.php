<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Session;
class ControlCategory extends Controller
{   

	
	public function index(){
        $data = Category::all();
          
		return view('blog/admin/category/index')->with('categories', $data);

	}
    public function create(){

    	return view('blog/admin/category/create');
    }
    public function store(request $request){

    	$this->validate($request, [
           'name' => 'required'
    	]);
    	$category = new Category;
    	$category->name = $request->name;
    	$category->save();
    	return redirect()->back();
    }

    public function edit($id){

      $category = Category::find($id);
      return view('blog/admin/category/edit')->with('category', $category);

    }
    public function update(Request $request,$id){
             
       $category =  Category::find($id);

       $category->name = $request->name;

       $category->save();

       Session::flash('app_info', 'Category Succesfully Updated');

       return redirect()->route('category.index');
       
     }

    public function destroy($id){
     
       $category =  Category::find($id);


        $category->delete();
        Session::flash('app_info', 'Category Succesfully Deleted');
       
       return redirect()->route('category.index');


    }
}
