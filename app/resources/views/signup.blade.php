@extends('master')

@section('title')
    Hellworld
@endsection
<head>
<link rel='stylesheet' href={{URL::to('src/css/signup1.css')}}>
</head>
@section('body')
<div class="container">

  <h2>SIGNUP</h2>
<br>
<form action="{{route('postsignup')}}" method="post">
    <div class="group">
      <label>First Name</label>
      <input type="text" name="fname"required>
      <span class="highlight"></span>
      <span class="bar"></span>
    </div>




 <div class="group">
      <label>Last Name</label>
      <input type="text" name="lname"required>
      <span class="highlight"></span>
      <span class="bar"></span>
    </div>

      <div class="group">
      <label>Email</label>
      <input type="text" name="email"required>
      <span class="highlight"></span>
      <span class="bar"></span>
    </div>
@if($Error == "Wrong Password")
      <div>Wrong Password</div>
      @endif
    <div class="group">
      <label>Password</label>
      <input type="password" name="password"required>
      <span class="highlight"></span>
      <span class="bar"></span>
    </div>

    <div class="group">
      <label>Confirm Password</label>
      <input type="password" name="cpassword"required>
      <span class="highlight"></span>
      <span class="bar"></span>
    </div>

    <div class="group">
    <label>DOB</label>
     <input type="Date" name="dob"required>
      <span class="highlight"></span>
      <span class="bar"></span>
    </div>

    <div class="group">
      <label>Mobile No</label>
      <input type="text" name="Mobile" required>
      <span class="highlight"></span>
      <span class="bar"></span>
    </div>

    <div class="group">
    <input type='hidden' name='_token' value='{{Session::token()}}'>

      <button type="Submit" class="btn btn-primary">Submit</button>
    </div>
</form>
</div>


@endsection
