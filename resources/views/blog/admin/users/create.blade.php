@extends('blog/admin/layout/app')
@section('content')
 
   
   @section('header')
    <h1>Create New User</h1>
    @stop
  <div class="col-md-6 offset-md-2">
 
  	<form method="Post" action="{{ route('user.store')}}" enctype="multipart/form-data" >
     {{ csrf_field() }}

  	 <label>User Name</label>
  	  <input type="text" name="name" class="form-control"><br>
  	 <label>Email</label>
      <input type="email" name="email" class="form-control"><br>
       <label>Featured Image</label>
      
                <input id="input-id" type="file" name="avatar" class="file" data-preview-file-type="text" >
  	  

  	
  	  
  	<input type="submit" class="btn btn-primary" value="Create">

  </form>
   @include('blog/admin/error')
  </div>
  

@stop