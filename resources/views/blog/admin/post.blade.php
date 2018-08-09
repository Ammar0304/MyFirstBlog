@extends('blog/admin/layout/app')
@section('content')
 
  
  @section('header')
    <h1>Create New Post</h1>
  @stop
  <div class="col-md-6 offset-md-2">
  
  	<form method="Post" action="{{ route('form.create') }}" enctype="multipart/form-data">
     {{ csrf_field() }}
  	 <label>Title</label>
  	  <input type="text" name="title" class="form-control">
  	 <label>Featured Image</label>
  	  
                <input id="input-id" type="file" name="featured" class="file" data-preview-file-type="text" >
  	  
     <label>Select Category</label>
     <select name="category_id" id="category" class="form-control">
      <option><--Select Category--></option>
       @foreach($categories as $category)
        <option value="{{ $category->id }}"> {{ $category->name }}</option>
       @endforeach
     </select><br>
     <label>Select Tags</label>
     <div class="form-group">
      @foreach($tags as $tag)
      <label><input type="checkbox" name="tag[]" value="{{ $tag->id }}">{{$tag->name }}</label><br>
       @endforeach
     </div>
  	 <label>Content</label>
  	   <textarea class="form-control" name="content" cols="5" rows="">
  		
  	   </textarea><br>
  	<input type="submit" class="btn btn-primary">

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