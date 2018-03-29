<?php
require_once "mqtt.php";

if($_POST['knop']=="strandtest") {
	sendmessage("vloer/startscript", "strandtest");
}

if($_POST['knop']=="4or") {
        sendmessage("vloer/startscript", "4or");
}

if($_POST['knop']=="matrix") {
        sendmessage("vloer/startscript", "matrix");
}

if($_POST['knop']=="stop") {
	sendmessage("vloer/startscript", "stop");
}
?>


<iframe name="votar" style="display:none;"></iframe>
<form method="post" target="votar">
    <button name="knop" value="strandtest">strandtest</button>
    <button name="knop" value="stop">stop</button>
    <button name="knop" value="4or">4 op een rij</button>
    <button name="knop" value="matrix">matrix effect</button>
</form>
<br /><br />

<a href="controller.php?id=1">Open controller player 1</a><br />
<a href="controller.php?id=2">Open controller player 2</a>


