@extends('blog/admin/layout/app')
@section('content')
 
    @section('header')
    <h1>All Posts</h1>
    @stop
  <div class="col-md-8 offset-md-1 ">
     <table class="table table-hover">
       <thead>
        <th>No.</th>
         <th>Image</th>
         <th>Title</th>
         <th>Edit</th>
         <th>Delete</th>

       </thead>
       <tbody>
           <?php
               $count = 0;
           ?>
           @foreach($posts as $post)
           <tr>
            <td><?php 
            $count = $count + 1;
            echo $count;
              ?></td>
            <td><img src="{{ $post->featured }}" alt="{{ $post->title }}" width="100px" height="100px" ></td>
             <td> {{ $post->title }} </td>
             <td>
               <a href="{{ route('post.edit',[ 'id' => $post->id ]) }}" class="btn btn-info">
                 <span class="glyphicon glyphicon-pencil ">
                   Edit
                 </span>
               </a>
             </td>
             <td>
               <a href="{{ route('post.delete',[ 'id' => $post->id ]) }}" class="btn btn-danger">
                 <span class="glyphicon glyphicon-trash ">
                   Delete
                 </span>
               </a>
             </td>
               </tr>
           @endforeach 
       
       </tbody>
       
     </table>
  </div>
  

@stop