@extends('blog/admin/layout/app')
@section('content')
 
    @section('header')
    <h1>Categories</h1>
    @stop
  <div class="col-md-6 offset-md-2 ">
     <table class="table table-hover">
       <thead>
         <th>Category Name</th>
         <th>Editing</th>
         <th>Delete</th>

       </thead>
       <tbody>
         
           @foreach($categories as $category)
           <tr>
             <td> {{ $category->name }} </td>
             <td>
               <a href="{{ route('category.edit',['id' =>  $category->id]) }}" class="btn btn-info">
                 <span class="glyphicon glyphicon-pencil ">
                   Edit
                 </span>
               </a>
             </td>
             <td>
               <a href="{{ route('category.delete',['id' =>  $category->id]) }}" class="btn btn-danger">
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