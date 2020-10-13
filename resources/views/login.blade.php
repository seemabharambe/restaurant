@extends('layout')

@section('content')

<div>

  <h1>Login User</h1>
  

<div class="col-sm-6">

<form action="login" method="POST">

  @csrf

  
 
<div class="form-group">
    <label>Email</label>
    <input type="text" name="email" class="form-control"  placeholder="Enter email">    
  </div>


  <div class="form-group">
    <label>Password</label>
    <input type="password" name="password" class="form-control"  placeholder="Enter password">    
  </div>



  <button type="submit" class="btn btn-primary">Login</button>
</form>
</div>

</div>

@stop