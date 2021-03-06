<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
.card {
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    width: 40%;
    border-radius: 5px;
}

.card:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

img {
    border-radius: 5px 5px 0 0;
}

.container {
    padding: 2px 16px;
}
.btn-success {
      size: 500%
      border-radius: 0;
      padding: 20px 20px 20px 20px;
   }
body {font-family: Arial;}

/* Style the tab */
.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
}
</style>
</head>
<body>
<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'London')">Courses</button>
  <button class="tablinks" onclick="openCity(event, 'Paris')">Become Tutor</button>

</div><br><br>
<div class="col-sm-4">
  <a href="secpage" ><img src="{{asset('src/css/music.jpg')}}" alt="Avatar" style="width:100%"></a>
  <div class="container">
    <h4><b>Music</b></h4>
    <p></p>
  </div>
</div>
<div class="col-sm-4">
 <a href="secpage" > <img src="{{asset('src/css/engineer.jpg')}}" alt="Avatar" style="width:100%"></a>
  <div class="container">
    <h4><b>Engineering</b></h4>
    <p></p>
  </div>
</div>
  <div class="col-sm-4">
<a href="secpage" >  <img src="{{asset('src/css/sports.jpg')}}" alt="Avatar" style="width:100%"></a>
  <div class="container">
    <h4 id="secpage"><b>Sports</b></h4>
    <p></p>
  </div></div>


  <div class="col-sm-4">
<a href="secpage" >  <img src="{{asset('src/css/developer.jpeg')}}" alt="Avatar" style="width:100%"></a>
  <div class="container">
    <h4 id="secpage"><b>Developer</b></h4>
    <p></p>
  </div>
</div>
<div class="col-sm-4">
<a href="secpage" >  <img src="{{asset('src/css/billionaire.jpg')}}" alt="Avatar" style="width:100%"></a>
  <div class="container">
    <h4 id="secpage"><b>Billionaire</b></h4>
    <p></p>
  </div></div>
  <div class="col-sm-4">
 <a href="secpage" > <img src="{{asset('src/css/doctor.jpg')}}" alt="Avatar" style="width:100%"></a>
  <div class="container">
    <h4 id="secpage"><b>Doctor</b></h4>
    <p></p>
  </div>
<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
var token='{{Session::token()}}';
var route='{{route('secpage')}}';
</script>


</body>
</html>
