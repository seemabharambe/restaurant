@extends('layout')

@section('content')

<div>

	<h1>Lists of Restorants</h1>

  @if(Session::get('status'))
  @endif

  <div class="alert alert-success" role="alert">
    {{Session::get('status')}}
  <a href="#" class="alert-link"></a>. 
  
</div>
	<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      <th>Operations</th>

    </tr>
  </thead>
  <tbody>
       
       @foreach($data as $item)

    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->name}}</td>
      <td>{{$item->email}}</td>
      <td>{{$item->address}}</td>
      <td><a href="delete/{{$item->id}}"><i class="fa fa-trash"></i></a>
           <a href="edit/{{$item->id}}"><i class='fas fa-edit'></i></a></td>
    </tr>


    @endforeach
  
  </tbody>
</table>

	
</div>
@stop