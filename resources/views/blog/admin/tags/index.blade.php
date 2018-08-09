@extends('blog/admin/layout/app')
@section('content')
 
    @section('header')
    <h1>Tags</h1>
    @stop
  <div class="col-md-6 offset-md-2 ">
     <table class="table table-hover">
       <thead>
         <th>Tag Name</th>
         <th>Editing</th>
         <th>Delete</th>

       </thead>
       <tbody>
         
           @foreach($tags as $tag)
           <tr>
             <td> {{ $tag->name }} </td>
             <td>
               <a href="{{ route('tag.edit',['id' =>  $tag->id]) }}" class="btn btn-info">
                 <span class="glyphicon glyphicon-pencil ">
                   Edit
                 </span>
               </a>
             </td>
             <td>
               <a href="{{ route('tag.delete',['id' =>  $tag->id]) }}" class="btn btn-danger">
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