@extends('blog/admin/layout/app')
@section('content')
 
   
   @section('header')
    <h1>Create Tag</h1>
    @stop
  <div class="col-md-6 offset-md-2">
 
  	<form method="Post" action="{{ route('tag.store')}}" >
     {{ csrf_field() }}
  	 <label>Tag Name</label>
  	  <input type="text" name="name" class="form-control"><br>
  	
  	  

  	
  	  
  	<input type="submit" class="btn btn-primary" value="Create">

  </form>
 
  </div>
  

@stop