@extends('master')

@section('title')
 Personality Index | D'Lite'
@endsection

@section('body')
<h1 class="text-center">Personality Index</h1>
<br>
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6 text-center">
    <form action="{{route('home')}}" method="get">
      <div class="form-group">
      <div id="Q1">
        <label for="Q1">Q1:What is your age?</label><br>
        <input type="checkbox" id="I1" value="5"> Between 5-10
        <input type="checkbox" id="I2" value="10"> Between 10-18
        <input type="checkbox" id="I3" value="18"> 18 or Above<br><br>
      </div>  
      <div id="Q2">
      
        <label for="Q2">Q2:How do you see your Future?</label><br>
        <input type="checkbox" id="I4" value="Bike"> Bright and Sunny
        <input type="checkbox" id="I5" value="Bike"> Misty and Foggy
        <input type="checkbox" id="I6" value="Bike"> Cloudy <br><br>
      </div>

      <div id="Q3">

        <label for="Q3">Q3:Are you Happy with your life?</label><br>
        <input type="checkbox" id="I7" value="Bike"> Yes
        <input type="checkbox" id="I8" value="Bike"> No
        <input type="checkbox" id="I9" value="Bike"> Not Sure<br><br>
      </div>

      <div id="Q4">

        <label for="Q4">Q4:What Is Your aim?</label><br>
        <input type="checkbox" id="I10" value="Bike"> To be Rich
        <input type="checkbox" id="I11" value="Bike"> To help someone
        <input type="checkbox" id="I12" value="Bike"> To bring a change
        <input type="checkbox" id="I13" value="Bike"> Nothing in particular
        <input type="checkbox" id="I14" value="Bike"> Other<br><br>
      </div>

      <div id="Q5">

        <label for="Q5">Q5:What are your obstacles?</label><br>
        <input type="checkbox" id="I15" value="Bike"> Physical
        <input type="checkbox" id="I16" value="Bike"> Emotional
        <input type="checkbox" id="I17" value="Bike"> Other<br><br>
      </div>
      
      <div id="Q6">

        <label for="Q6">Q6:Do you think you can overcome your obstacles?</label><br>
        <input type="checkbox" id="I18" value="Bike"> Yes
        <input type="checkbox" id="I19" value="Bike"> No
        <input type="checkbox" id="I20" value="Bike"> Maybe<br><br>
      </div>
      <div id="Q7">

        <label for="Q7">Q7:If Physical,Can you tell us what are they?</label><br>
        <input type="checkbox" id="I18" value="Bike"> Hard of Hearing
        <input type="checkbox" id="I19" value="Bike"> Blind
        <input type="checkbox" id="I20" value="Bike"> Autistic
        <input type="checkbox" id="I21" value="Bike"> Amputee<br><br>
      </div>
      </div>
      <input type='hidden' name='_token' value='{{Session::token()}}'>
      <button type="submit" class="btn btn-primary" id="sub">Submit</button>
    </form>
  </div>
  <div class="col-md-4"></div>
</div>
<script>
var token='{{Session::token()}}';
var route='{{route('secpage')}}';
</script>
@endsection
