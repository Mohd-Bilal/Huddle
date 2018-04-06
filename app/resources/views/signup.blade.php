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
      <input type="text" name="fname"required>
      <span class="highlight"></span>
      <span class="bar"></span>
      <label>First Name</label>
    </div>
      



 <div class="group">      
      <input type="text" name="lname"required>
      <span class="highlight"></span>
      <span class="bar"></span>
      <label>Last Name</label>
    </div>
      
      <div class="group">      
      <input type="text" name="email"required>
      <span class="highlight"></span>
      <span class="bar"></span>
      <label>Email</label>
    </div>
@if($Error == "Wrong Password")
      <div>Wrong Password</div>
      @endif
    <div class="group">      
      <input type="password" name="password"required>
      <span class="highlight"></span>
      <span class="bar"></span>
      <label>Password</label>
    </div>
    
    <div class="group">      
      <input type="password" name="cpassword"required>
      <span class="highlight"></span>
      <span class="bar"></span>
      <label>Confirm Password</label>
    </div>

    <div class="group">      
     <input type="Date" name="dob"required>
      <span class="highlight"></span>
      <span class="bar"></span>
      <label>DOB</label>
    </div>    

    <div class="group">      
      <input type="text" name="Mobile" required>
      <span class="highlight"></span>
      <span class="bar"></span>
      <label>Mobile No</label>
    </div>

    <div class="group">   
    <input type='hidden' name='_token' value='{{Session::token()}}'>
      
      <button type="Submit" class="btn btn-primary">Submit</button>
    </div>
</form>
</div>
    

@endsection
