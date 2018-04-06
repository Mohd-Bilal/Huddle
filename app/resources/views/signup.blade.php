@extends('master')

@section('title')
    Hellworld
@endsection
@section('body')

    <html>
    <h1>
       SIGNUP 
    </h1>
    <form action="{{route('postsignup')}}" method="post">
      <label>First Name</label>   <input type="text" name="fname"><br><br>
      <label>Last Name</label><input type="text" name="lname"><br><br>
      <label>Email</label><input type="text" name="email"><br><br>
      @if($Error == "Wrong Password")
      <div>Wrong Password</div>
      @endif
      <label>Password</label><input type="password" name="password"><br><br>
      <label>Confirm Password</label><input type="password" name="cpassword"><br><br>
      <label>Date of Birth</label><input type="text" name="dob"><br><br>
      <label>Mobile No</label><input type="text" name="Mobile"><br><br>
    <input type='hidden' name='_token' value='{{Session::token()}}'>

        <button type="Submit">Submit</button>
    </form>
</html>
@endsection
