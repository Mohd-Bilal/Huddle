@extends('master')

@section('title')
 Quiz | D'Lite'
@endsection

@section('body')
<h1 class="text-center">Quiz</h1>
<br>
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6 text-center">
    <form action="{{route('postsignin')}}" method="post">
      <div class="form-group">
        <label for="Q1">Q1:What Is Your Name?</label><br>
        <input type="checkbox" name="vehicle" value="Bike"> I have a bike
        <input type="checkbox" name="vehicle" value="Bike"> I have a bike
        <input type="checkbox" name="vehicle" value="Bike"> I have a bike<br><br>
        <label for="Q1">Q1:What Is Your Name?</label><br>
        <input type="checkbox" name="vehicle" value="Bike"> I have a bike
        <input type="checkbox" name="vehicle" value="Bike"> I have a bike
        <input type="checkbox" name="vehicle" value="Bike"> I have a bike<br><br>
        <label for="Q1">Q1:What Is Your Name?</label><br>
        <input type="checkbox" name="vehicle" value="Bike"> I have a bike
        <input type="checkbox" name="vehicle" value="Bike"> I have a bike
        <input type="checkbox" name="vehicle" value="Bike"> I have a bike<br><br>
        <label for="Q1">Q1:What Is Your Name?</label><br>
        <input type="checkbox" name="vehicle" value="Bike"> I have a bike
        <input type="checkbox" name="vehicle" value="Bike"> I have a bike
        <input type="checkbox" name="vehicle" value="Bike"> I have a bike<br><br>
      </div>
      <input type='hidden' name='_token' value='{{Session::token()}}'>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
  <div class="col-md-4"></div>
</div>
@endsection
