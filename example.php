<?php

require_once 'AvalancheAPI.php';

//Create and load map
$api = new AvalancheAPI();
$map = $api->getMap([
    "avalanche_center" => "BTAC",
    "basemap_color" => "lightColor"
]);

//Now inject the html (echo) into div of choice
echo $map;

?>

