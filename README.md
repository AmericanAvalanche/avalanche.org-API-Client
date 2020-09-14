# avalanche.org-API-SDK

An SDK to interact with the avalanche.org API. For direct API access, see the <a href ='API_USERGUIDE.md'>API User guide</a>

Current functionality includes:

- [Forecast map](#forecast-map) - your avalanche center region with zones and danger ratings
- [Weather map](#weather-map) - weather station map, table, time series
- [Grouped weather table](#grouped-weather-table) - showing multiple weather stations in a single table

## Requirements

- PHP version > 5.6
- Curl
- jQuery loaded on pages

## Configuration

Create a configuration file in the root of this project directory, called `config.php`. It should contain, at a minimum, the avalanche center ID.

```php
<?php

return [
    // Avalanche Center ID
    'center_id' => 'SNFAC'
];
```

# Forecast map

## Default usage

```php
<?php

require_once 'avalanche.org-API-Client/AvalancheAPI.php';

//Create and load map
$api = new AvalancheAPI();
$map = $api->getMap();
```

```html
<!-- Now echo $map variable into the containing div in which the map should be displayed -->
<div class="map-div"><?= $map; ?></div>
```

## Optional customizations

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

## Updating your forecast

Note: you must have already coordinated with avalanche.org and setup the necessary data sharing files in order for this to work.

```php
<?php

require_once 'avalanche.org-API-Client/AvalancheAPI.php';
$api = new AvalancheAPI();
//Output message availible as to success
$api->updateForecast();

```

# Weather Map

The remote weather station map displays weather station data for the forecast area using a map, table and modal to display the station timeseries.

**Note**: you must have already coordinated with the National Avalanche Center to obtain access to the weather maps API and received a token.

## Configuration

The following configuration options are modified in the configuration file `config.php` for the `avalanche.org-API-Client`.

```php
<?php
...
'center_id' => '<center-id>',
'token' => '<weather-map-token>',
'wx_maps' => '<optional>',
'wx_map_zones' => '<optional-url-to-kml-file>',
'custom_external_modal_links' => [
  '<station-id>' => [
    '<link-name>' => '<link>'
  ]
]
...
```

- **`center_id`**
  - Avalanche Center ID to display the forecast zone boundaries.
  - By default, the weather table will group stations by the forecast zone boundaries
- **`token`**
  - Weather maps token obtained from the National Avalanche Center
- **`wx_maps`**, _Optional_
  - Defaults to the production weather maps to be used on public facing website
  - Changing allows testing of features in development, coordinate with National Avalanche Center to change
- **`wx_map_zones`**, _Optional_
  - Url to a publicly accessible kml file that defines alternate polygons for table grouping
  - Group title and order is controlled by polygon name and order in kml file
- **`custom_external_modal_links`**, _Optional_
  - Allows custom links to be displayed inside the station modal
  - Will open links in new window

## Map setup

To setup the map, login to [avalanche.org](https://avalanche.org/) and go to the weather map setup page. The following is a short description of the setup features, see the documentation for full setup instructions.

- **Adding a station**: Single click on a station, a white halo will indicate that the station has been added
- **Removing a station**: Single click on a station that has a white halo
- **Map menu**
  - Submit button will submit the map settings below and set the center of the map at the current view
  - Re-center button will recenter the map to the default view
  - Change the Avalanche Center for the zone boundaries
  - Default map zoom
  - Data sources, NWAC sources is only for NWAC stations and are not available outside the NWAC forecast area
  - Map settings to customize units, timezone, current measurements and QC from Mesowest
- **Varible control**
  - Table view button shows a table of all the variables from Mesowest and Snotel
  - Inline editing of `Long Name`, `Tab` and `Rounding` are available
  - `Show Variable`, controls the what variables are shown, if green will show the variable on the map, if red will not show this variable
  - Submit will submit the table and save changes
- **Webcams**
  - Right click on the map to place a webcam
  - Left click on the new (or existing) webcam to bring up the webcam form modal
  - Provide a title to the webcam which will show on hover
  - The "Image Information" card is the name and image url for the webcam
  - "Add Another Image" will add additional webcam images to the modal
  - Click "Save Webcam" to save or "Delete Webcam" to delete

## Usage

If the map has not been setup on [avalanche.org](https://avalanche.org/), it will default to the SNFAC forecast zone until the map has been properly configured for a particular avalanche center.

```php
<?php

require_once 'avalanche.org-API-Client/AvalancheAPI.php';
$api = new AvalancheAPI();
//Get the weather maps view, then echo where desired
$wxMap = $api->getWeatherMap();
```

```html
<!-- Now echo $wxMap variable into the containing div in which the map should be displayed -->
<div class="map-div"><?= $wxMap; ?></div>

<!-- or -->
<div class="map-div"><?= echo $wxMap; ?></div>
```

# Grouped weather table

**Note**: you must have already coordinated with the National Avalanche Center to obtain access to the weather maps API and received a token.

## Configuration

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

## Usage

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
<div class="table-div"><?= $wxTable; ?></div>
```
