@extends('blog/admin/layout/app')
@section('content')
 
   
   @section('header')
    <h1>Edit Your Profile</h1>
    @stop
  <div class="col-md-6 offset-md-2">
 
  	<form method="Post" action="{{ route('profile.update', ['id'=>$user->id ])}}" enctype="multipart/form-data" >
     {{ csrf_field() }}
    
  	  <label>User Name</label>
  	  <input type="text" name="name" value="{{$user->name}}" class="form-control"><br>
  	  <label>Email</label>
      <input type="email" name="email" value="{{$user->email}}" class="form-control"><br>
     
      <label>Password</label>
      <input type="password" name="password"  class="form-control"><br>
      @if(isset($user->profile->avatar))
        <img src="{{ asset('').$user->profile->avatar }}" alt="No Image" width="100px" height="100px" ><br><br>
      @endif
      <label>Upload New Image</label>
      <input id="input-id" type="file" name="avatar" class="file" data-preview-file-type="text" ><br>
  	  <label>Facebook Profile</label>
      <input type="text" name="facebook" value="{{$user->profile->facebook}}" class="form-control"><br>
      <label>Youtube Profile</label>
      <input type="text" name="youtube" value="{{$user->profile->youtube}}" class="form-control"><br>
      <label>About You</label>
      <textarea name="about"  class="summernote">
        {{ $user->profile->about}}
        
      </textarea>
      

  	
  	  
  	<input type="submit" class="btn btn-primary" value="Update">

  </form>

   @include('blog/admin/error')
  </div>
  

@stop