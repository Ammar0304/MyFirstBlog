@extends('blog/admin/layout/app')
@section('content')
 
   
    @section('header')
    <h1>Create New Category</h1>
    @stop
  <div class="col-md-6 offset-md-2 ">
 
  	<form method="Post" action="{{ route('category.store') }}" >
     {{ csrf_field() }}
  	 <label>Category Name</label>
  	  <input type="text" name="name" class="form-control"><br>
  	
  	  

  	
  	  
  	<input type="submit" class="btn btn-primary" value="Store Category">

  </form>
       @if(count($errors) > 0)
       
       <ul class="list-group">

          @foreach($errors->all() as $error )

                <li class="list-items text-danger">
                  {{ $error }}
                  
                </li>
            @endforeach
                  
        
       </ul>
   
   @endif
  </div>
  

@stop