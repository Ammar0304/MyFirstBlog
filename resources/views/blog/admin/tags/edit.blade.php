@extends('blog/admin/layout/app')
@section('content')
 
   
   @section('header')
    <h1>Update Tag</h1>
    @stop
  <div class="col-md-6 offset-md-2">
 
  	<form method="Post" action="{{ route('tag.update', ['id' => $tag->id ]) }}" >
     {{ csrf_field() }}
  	 <label>Update Tag: {{ $tag->name }}</label>
  	  <input type="text" name="name" value="{{ $tag->name }}" class="form-control"><br>
  	
  	  

  	
  	  
  	<input type="submit" class="btn btn-primary" value="Update Category">

  </form>
 
  </div>
  

@stop