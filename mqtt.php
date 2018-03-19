<?php
include "config.php";

function sendmessage($topic, $message, $qos=0) {
	global $mqttuser,$mqttaddr,$mqttpass;
    $client = new Mosquitto\Client;
    $client->setCredentials($mqttuser, $mqttpass);
    $client->connect($mqttaddr);
	$client->publish($topic, $message, $qos);
	$client->loop();
	$client->disconnect();
}
?>
