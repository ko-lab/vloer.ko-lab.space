<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="menu.css">
<script>
/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}
function opEenRij4(){

    var content = 	 " <br></br> <br></br> <p>  <a href=\"controller.php?id=1\" class=\"p1\">speler 1</a></p> <br></br> <p><a href=\"controller.php?id=1\" class=\"p2\">speler 2</a></p>";
    document.getElementsByTagName('body')[0].innerHTML = content;

	}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
</head>
<body>
<?php
require_once "mqtt.php";

if($_POST['knop']=="strandtest") {
	sendmessage("vloer/startscript", "strandtest");
}

if($_POST['knop']=="4or") {
        sendmessage("vloer/startscript", "4or");
	echo "<script>window.location = 'https://vloer.ko-lab.space/chooseplayer.php'</script>";
}

if($_POST['knop']=="matrix") {
        sendmessage("vloer/startscript", "matrix");
}

if($_POST['knop']=="stop") {
	sendmessage("vloer/startscript", "stop");
}
?>

<h1>Welkom op de ko-lab ledvloer</h1>
<p>Klik op de knop om te selecteren wat u wilt doen met onze super coole vloer!</p>

<div class="dropdown">
<form method="post" target="#">
	<button type="button" onclick="myFunction()" class="dropbtn">klik op mij</button>
	  <div id="myDropdown" class="dropdown-content">
	     <button name="knop" value="strandtest" class="vanbinnen">strandtest</button>
	    <button name="knop" value="stop" class="vanbinnen">stop</button>
	    <button name="knop" value="4or" class="vanbinnen">4 op een rij</button>
		<button name="knop" value="matrix" class="vanbinnen">matrix effect</button>
	  </div>
</form>
</div>
</body>
</html>
