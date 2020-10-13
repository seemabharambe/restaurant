@extends('layout')

@section('content')

<div>
<h1>Edit Restorants</h1>
<form action="/edit" method="POST">

  @csrf

  <div class="form-group">
    <label>Name</label>
    <input type="hidden" name="id"   value="{{$data->id}}">

    <input type="text" name="name" value="{{$data->name}}" class="form-control"  placeholder="Enter name">    
  </div>
 

<div class="form-group">
    <label>Email</label>
    <input type="text"  name="email" value="{{$data->email}}" class="form-control"  placeholder="Enter Email">    
  </div>
 

<div class="form-group">
    <label>Address</label>
    <input type="text" name="address" value="{{$data->address}}" class="form-control"  placeholder="Enter address">    
  </div>
 
    
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@stop