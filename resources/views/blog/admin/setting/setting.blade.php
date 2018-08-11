@extends('blog/admin/layout/app')
@section('content')
 
   
   @section('header')
    <h1>Site Setting</h1>
    @stop
  <div class="col-md-6 offset-md-2">
 
  	<form method="Post" action="{{ route('settings.update')}}"  >
     {{ csrf_field() }}
    
  	 <label>Site Name</label>
  	  <input type="text" name="name" value="{{ $settings->name }}" class="form-control"><br>
  	 <label>Site Address</label>
      <input type="text" name="address" value="{{ $settings->address }}" class="form-control"><br>

      <label>Contact Phone</label>
      <input type="text" name="contact_number" value="{{ $settings->contact_number }}" class="form-control"><br>

       <label>Contact Email</label>
      <input type="text" name="contact_email" value="{{ $settings->contact_email }}" class="form-control"><br>
  	<input type="submit" class="btn btn-primary" value="Update Site Setting">

  </form>
   @include('blog/admin/error')
  </div>
  

@stop