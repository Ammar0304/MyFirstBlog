@extends('blog/admin/layout/app')
@section('content')
 
    @section('header')
    <h1>All Users</h1>
    @stop
  <div class="col-md-8 offset-md-1 ">
     <table class="table table-hover">
       <thead>
        <th>No.</th>
         <th>Image</th>
         <th>Name</th>
         <th>Permissions</th>
         <th>Delete</th>

       </thead>
       <tbody>
        @if($users->count() > 0)

           <?php
               $count = 0;
           ?>
           @foreach($users as $user) 
            
                   <tr>
            <td><?php 
            $count = $count + 1;
            echo $count;
              ?></td>
            <td>
              @if(isset($user->profile->avatar))

              <img src="{{ asset('').$user->profile->avatar }}" alt="" width="100px" height="100px" >
              @else
              <h3>No Image</h3>
              @endif
            </td>
             <td> {{ $user->name }} </td>
             <td>
               <a href="{{ route('user.edit',[ 'id' => $user->id ]) }}" class="btn btn-info">
                 <span class="glyphicon glyphicon-pencil ">
                   Edit
                 </span>
               </a>
             </td>
             <td>
               <a href="{{ route('user.delete',[ 'id' => $user->id ]) }}" class="btn btn-danger">
                 <span class="glyphicon glyphicon-trash ">
                   Delete
                 </span>
               </a>
             </td>
               </tr>
           @endforeach
           @else
           <tr>
             <th colspan="5" class="text-center" >No users</th>
           </tr> 
           @endif
       
       </tbody>
       
     </table>
  </div>
  

@stop