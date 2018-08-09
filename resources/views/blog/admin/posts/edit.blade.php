@extends('blog/admin/layout/app')
@section('content')
 
  
  @section('header')
    <h1>Update Post</h1>
  @stop
  <div class="col-md-6 offset-md-2">
  
    <form method="Post" action="{{ route('post.update',['id' => $data->id]) }}" enctype="multipart/form-data">
     {{ csrf_field() }}
     <label>Title</label>
      <input type="text" name="title" class="form-control" value="{{ $data->title }}"><br>
      <img src="{{ $data->featured }}" alt="{{ $data->title }}" width="100px" height="100px" ><br><br>
     <label>Featured Image</label>
      
                <input id="input-id" type="file" name="featured" class="file" data-preview-file-type="text" >
      
     <label>Select Category</label>
     <select name="category_id" id="category" class="form-control">
      <option value="{{ $data->category_id }}"></option>
       @foreach($categories as $category)
        <option value="{{ $category->id }}"> {{ $category->name }}</option>
       @endforeach
     </select>
     
     <label>Content</label>
       <textarea class="form-control" name="content" cols="5" rows="5" >
         {{ $data->content }}
       </textarea><br>
    <input type="submit" class="btn btn-primary" value="Update">

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