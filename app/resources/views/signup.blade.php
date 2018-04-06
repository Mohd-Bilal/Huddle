@extends('master')

@section('title')
    Hellworld
@endsection
@section('body')

    <html>
    <h1>
       SIGNUP 
    </h1>
    <form action="{{route('signup')}}" method="post">
      First Name   <input type="text" name="username"><br><br>
      Last Name<input type="password" name="password"><br><br>

        <input value="Submit" type="submit">
    </form>
</html>
@endsection
