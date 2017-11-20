# avalanche.org-API-Client
A client to interact with the avalanche.org API. The only requirement is that your server has CURL<br>
<h3>Embedded map:</h3>

Default usage

```php
<?php

require_once 'avalanche.org-API-Client/AvalancheAPI.php';

//Create and load map
$api = new AvalancheAPI();
$map = $api->getMap('BTAC');
    
```

Optional customizations

```php
<?php

require_once 'avalanche.org-API-Client/AvalancheAPI.php';

//Create and load map
$api = new AvalancheAPI();
$map = $api->getMap('BTAC', [
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
$api->updateForecast('GNFAC');
    
```

