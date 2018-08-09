@extends('blog/admin/layout/app')
@section('content')
 
   
   @section('header')
    <h1>Update Category</h1>
    @stop
  <div class="col-md-6 offset-md-2">
 
  	<form method="Post" action="{{ route('category.update', ['id' => $category->id ]) }}" >
     {{ csrf_field() }}
  	 <label>Update Category: {{ $category->name }}</label>
  	  <input type="text" name="name" value="{{ $category->name }}" class="form-control"><br>
  	
  	  

  	
  	  
  	<input type="submit" class="btn btn-primary" value="Update Category">

  </form>
 
  </div>
  

@stop