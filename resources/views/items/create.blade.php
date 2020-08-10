@extends('layouts.master')

@section('content')
<form class="user ml-2 mr-2">
    <div class="form-group">
      <input type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address...">
    </div>
    <div class="form-group">
      <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
    </div>
    <a href="index.html" class="btn btn-primary btn-user btn-block">
      Submit
    </a>
  </form>
@endsection