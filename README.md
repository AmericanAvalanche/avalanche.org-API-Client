# avalanche.org-API-Client
A client to interact with the avalanche.org API. The only requirement is that your server has CURL and is running php version 5.6+<br>

<h3>Configuration:</h3>

Create a configuration file in the root of this project directory, called "config.php". It should contain the following

```php
<?php

return [
    //Avalanche Center ID
    'center_id' => 'SNFAC',
    //Weather maps token
    'token' => 'your-weather-maps-token'
];
    
```


<h3>Embedded map:</h3>

Default usage

```php
<?php

require_once 'avalanche.org-API-Client/AvalancheAPI.php';

//Create and load map
$api = new AvalancheAPI();
$map = $api->getMap();
    
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

<h3>Updating your forecast:</h3>
<p>Note: you must have already coordinated with avalanche.org and setup the necessary data sharing files in order for this to work.</p>

```php
<?php

require_once 'avalanche.org-API-Client/AvalancheAPI.php';
$api = new AvalancheAPI();
//Output message availible as to success
$api->updateForecast();
    
```

<h3>Weather Maps:</h3>
<p>Note: you must have already coordinated with avalanche.org to obtain access to the weather maps API and received a token.</p>

```php
<?php

require_once 'avalanche.org-API-Client/AvalancheAPI.php';
$api = new AvalancheAPI();
//Get the weather maps view, then echo where desired
$wxMap = $api->getWeatherMap();
    
```

