<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
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

<p>Click on the buttons inside the tabbed menu:</p>

<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'London')">Video of the day</button>
  <button class="tablinks" onclick="openCity(event, 'Paris')">Daily Task</button>
  <button class="tablinks" onclick="openCity(event, 'Tokyo')">Achievements</button>
  <button class="tablinks" onclick="openCity(event, 'Amsterdam')">Task progress</button>
<a href="thirdpage">  <button class="tablinks" onclick="openCity(event, 'Delhi')">Mentor</button></a>
  <button class="tablinks" onclick="openCity(event, 'Berlin')">Community and group </button>
</div>

<div id="London" class="tabcontent">
  <h3>Video of the day</h3>
  <iframe width="420" height="345" src="https://www.youtube.com/embed/tgbNymZ7vqY">
</iframe>
</div>

<div id="Paris" class="tabcontent">
  <h3>Daily Task</h3>
  <p><ol><li>what should be the pulse of an average human being?<br><input type="text" name=""></li>
    <li>who is the president of india?<br><input type="text" name=""></li>
    <li>how many states are there in india?<br><input type="text" name="">
      <li>how many colours are there in the rainbow?<br><input type="text" name=""></li>
      <li>what is the capital of india?<br><input type="" name=""></li></ol></p> 
</div>

<div id="Tokyo" class="tabcontent">
  <h3>Achievements</h3>
  <p>Nartak, you have successfully completed the basic lessons of dancing</p>
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
</script>
     
</body>
</html> 
