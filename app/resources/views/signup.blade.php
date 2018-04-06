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
      First Name   <input type="text" name="fname"><br><br>
      Last Name<input type="text" name="lname"><br><br>
      Email<input type="text" name="email"><br><br>
      Password<input type="password" name="password"><br><br>
      Confirm Password<input type="password" name="cpassword"><br><br>
      Date of Birth<input type="text" name="dob"><br><br>
      Mobile No<input type="text" name="Mobile"><br><br>
    <input type='hidden' name='_token' value='{{Session::token()}}'>

        <button type="Submit">Submit</button>
    </form>
</html>
@endsection
