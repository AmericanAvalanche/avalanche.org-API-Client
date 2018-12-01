# avalanche.org-API-Client
A client to interact with the avalanche.org API.

Current functionality includes:
- [Forecast map](#forecast-map) - your avalanche center region with zones and danger ratings
- [Weather map](#weather-map) - weather station map, table, time series
- [Grouped weather table](#grouped-weather-table) - showing multiple weather stations in a single table

## Requirements

- PHP version > 5.6
- Curl
- jQuery loaded on pages


## Configuration

Create a configuration file in the root of this project directory, called `config.php`. It should contain the following (contact the National Avalanche Center for token access)

```php
<?php

return [
    //Avalanche Center ID
    'center_id' => 'SNFAC',
    //Weather maps token
    'token' => 'your-weather-maps-token'
];

```


## Forecast map

#### Default usage

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

#### Optional customizations

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

- basemap_color: bw, lightColor, color
- zoom_level: uses the slippy maps zoom scale: https://wiki.openstreetmap.org/wiki/Zoom_levels
- danger_scale: bottom, top
- map_height: number, in pixels

#### Updating your forecast
Note: you must have already coordinated with avalanche.org and setup the necessary data sharing files in order for this to work.

```php
<?php

require_once 'avalanche.org-API-Client/AvalancheAPI.php';
$api = new AvalancheAPI();
//Output message availible as to success
$api->updateForecast();

```

## Weather Map

Note: you must have already coordinated with the National Avalanche Center to obtain access to the weather maps API and received a token.

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

## Grouped weather table

Note: you must have already coordinated with the National Avalanche Center to obtain access to the weather maps API and received a token.

### Configuration
If weather station grouping is desired, put the following configuration in the configuration file `config.php` for the `avalanche.org-API-Client`.

```php
<?php
...
'station_group_tables_config' => [
  '{table_name}' => [
    ['{station_id_1}', '{variable}'],
    ['{station_id_2}', '{variable}'],
    ...
  ]
],
...
```

The `{table_name}` will become the header for the table. The `{station_id_XX}` is the station id, either the Mesowest station code or custom data stream id. The `{variable}` is the standardized variable name to display in the table. The order of the station/variable pair will dictate the column order in the table.

### Usage

Each `{table_name}` in the configuration can be placed in their own webpage.

```php
<?php

require_once 'avalanche.org-API-Client/AvalancheAPI.php';
$api = new AvalancheAPI();
//Get the weather group table view, then echo where desired
$wxTable = $api->getGroupTables({table_name});

```

```html
<!-- Now echo $wxTable variable into the containing div in which the table should be displayed -->
<div class='table-div'><?= $wxTable; ?></div>

```
