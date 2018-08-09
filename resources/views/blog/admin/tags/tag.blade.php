@extends('blog/admin/layout/app')
@section('content')
 
   
   @section('header')
    <h1>Create Tag</h1>
    @stop
  <div class="col-md-6 offset-md-2">
 
  	<form method="Post" action="{{ route('category.store'}}" >
     {{ csrf_field() }}
  	 <label>Tag Name</label>
  	  <input type="text" name="tag" class="form-control"><br>
  	
  	  

  	
  	  
  	<input type="submit" class="btn btn-primary" value="Update Category">

  </form>
 
  </div>
  

@stop