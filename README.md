# avalanche.org-API-Client
A client to interact with the avalanche.org API. The only requirement is that your server has CURL and is running php version 5.6+<br>

Current functionality includes:
<ul>
<li>The forecast map - your avalanche center region with zones and danger ratings</li>
<li>Weather products - map, table, time series</li>
</ul>


<h3>Configuration:</h3>

Create a configuration file in the root of this project directory, called "config.php". It should contain the following (contact the National Avalanche Center for token access)

```php
<?php

return [
    //Avalanche Center ID
    'center_id' => 'SNFAC',
    //Weather maps token
    'token' => 'your-weather-maps-token'
];
    
```


<h3>Forecast map:</h3>

Default usage

```php
<?php

require_once 'avalanche.org-API-Client/AvalancheAPI.php';

//Create and load map
$api = new AvalancheAPI();
$map = $api->getMap();
    
```

```html
<!-- Now echo $map variable into the containing div in which the map should be displayed -->
<div class='map-div'><?= $map; ?></div>

```

Optional customizations

```php
<?php

require_once 'avalanche.org-API-Client/AvalancheAPI.php';

//Create and load map
$api = new AvalancheAPI();
$map = $api->getMap([
    "basemap_color" => "lightColor",
    "zoom_level" => 7,
    "danger_scale" => "bottom",
    "map_height" => 400
]);
    
```
basemap_color: bw, lightColor, color

zoom_level: uses the slippy maps zoom scale: https://wiki.openstreetmap.org/wiki/Zoom_levels

danger_scale: bottom, top

map_height: number, in pixels

<h3>Updating your forecast:</h3>
<p>Note: you must have already coordinated with avalanche.org and setup the necessary data sharing files in order for this to work.</p>

```php
<?php

require_once 'avalanche.org-API-Client/AvalancheAPI.php';
$api = new AvalancheAPI();
//Output message availible as to success
$api->updateForecast();
    
```

<h3>Weather Products:</h3>
<p>Note: you must have already coordinated with the National Avalanche Center to obtain access to the weather maps API and received a token.</p>

```php
<?php

require_once 'avalanche.org-API-Client/AvalancheAPI.php';
$api = new AvalancheAPI();
//Get the weather maps view, then echo where desired
$wxMap = $api->getWeatherMap();
    
```

```html
<!-- Now echo $wxMap variable into the containing div in which the map should be displayed -->
<div class='map-div'><?= $wxMap; ?></div>

```

