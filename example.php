<?php

include 'AvalancheAPI.php';

//Create and load map
$api = new AvalancheAPI();
$map = $api->getMap("GNFAC");

//Now inject the html (echo) into div of choice
echo $map;

?>

