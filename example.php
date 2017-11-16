<?php

require_once 'AvalancheAPI.php';

//Create and load map
$api = new AvalancheAPI();
$map = $api->getMap('BTAC', [
    "basemap_color" => "lightColor",
    "zoom_level" => 7,
    "danger_scale" => "bottom",
    "map_height" => 400
  ]);

//Now inject the html (echo) into div of choice
echo $map;

?>

