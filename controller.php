<?php
require_once "mqtt.php";

if(isset($_GET['id'])) {
	if($_POST['knop']=="up") {
		sendmessage("vloer/controller/" . $_GET['id'], "up");
	}
	if($_POST['knop']=="left") {
		sendmessage("vloer/controller/" . $_GET['id'], "left");
	}
	if($_POST['knop']=="right") {
		sendmessage("vloer/controller/" . $_GET['id'], "right");
	}
	if($_POST['knop']=="down") {
		sendmessage("vloer/controller/" . $_GET['id'], "down");
	}
}
else{
	die("need id");
}

?>

<iframe name="votar" style="display:none;"></iframe>
<form method="post" target="votar">
	<table >
		<tbody>
			<tr>
				<td> </td>
				<td><button name="knop" value="up">&nbsp;&nbsp;up&nbsp;&nbsp;</button></td>
				<td> </td>
			</tr>
			<tr>
				<td><button name="knop" value="left">left</button></td>
				<td> </td>
				<td><button name="knop" value="right">right</button></td>
			</tr>
			<tr>
				<td> </td>
				<td><button name="knop" value="down">down</button></td>
				<td> </td>
			</tr>
		</tbody>
	</table>
</form> 