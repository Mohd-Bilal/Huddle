@extends('master')

@section('title')
Sign In | D'Lite
@endsection

@section('body')
 <h1 class="text-center">Sign In</h1>
 <br>
 <div class="row">
     <div class="col-md-4"></div>
     <div class="col-md-4">
     <form action="#" method="post">
       <div class="form-group">
         <label for="email">Your Email:</label>
         <input type="text" class="form-control" id="email">
       </div>
       <div class="form-group">
         <label for="email">Your Password:</label>
         <input type="text" class="form-control" id="password">
       </div>
       <button type="submit" class="btn btn-primary">Login</button>
     </form>
   </div>
   <div class="col-md-4"></div>
</div>
@endsection
