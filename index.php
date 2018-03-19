<?php
require_once "mqtt.php";

if($_POST['knop']=="strandtest") {
	sendmessage("vloer/startscript", "strandtest");
}

if($_POST['knop']=="stop") {
	sendmessage("vloer/startscript", "stop");
}
?>


<iframe name="votar" style="display:none;"></iframe>
<form method="post" target="votar">
    <button name="knop" value="strandtest">strandtest</button>
    <button name="knop" value="stop">stop</button>
</form> 
<br /><br />

<a href="controller.php?id=1">Open controller player 1</a><br />
<a href="controller.php?id=2">Open controller player 2</a>


