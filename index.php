<?php
include "config.php";

if($_POST['knop']=="strandtest") {
    $client = new Mosquitto\Client;
    $client->setCredentials($mqttuser, $mqttpass);
    $client->onConnect(function() use ($client) {
        $client->publish('vloer/startscript', 'strandtest', 0);
        $client->disconnect();
    });

    $client->connect('localhost');
    $client->loopForever();
}

if($_POST['knop']=="stop") {
    $client = new Mosquitto\Client;
    $client->setCredentials($mqttuser, $mqttpass);
    $client->onConnect(function() use ($client) {
        $client->publish('vloer/startscript', 'stop', 0);
        $client->disconnect();
    });

    $client->connect($mqttaddr);
    $client->loopForever();
}
?>

<iframe name="votar" style="display:none;"></iframe>
<form method="post" target="votar">
    <button name="knop" value="strandtest">strandtest</button>
    <button name="knop" value="stop">stop</button>
</form> 
