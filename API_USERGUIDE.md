# API User Guide

Current functionality includes:

- [Forecast map](#forecast-map) - your avalanche center region with zones and danger ratings
- [Weather map](#weather-map) - weather station map, table, time series
- [Grouped weather table](#grouped-weather-table) - showing multiple weather stations in a single table

# Map Layer

A geojson representation of the avalanche center(s) and the current avalanche forecast.

`GET /v2/public/products/map-layer`

## Request
```bash

curl https://api.avalanche.org/v2/public/products/map-layer
```

## Response
```json
{
    "type": "FeatureCollection",
    "features": [
        {
            "type": "Feature",
            "id": 213,
            "properties": {
                "name": "Chilkat Pass",
                "center": "Alaska Avalanche Center",
                "center_link": "https://alaskasnow.org/",
                "timezone": "America/Anchorage",
                "center_id": "AAIC",
                "state": "AK",
                "travel_advice": "Watch for signs of unstable snow such as recent avalanches, cracking in the snow, and audible collapsing. Avoid traveling on or under similar slopes.",
                "danger": "no rating",
                "danger_level": -1,
                "color": "#cccccc",
                "stroke": "#104efb",
                "font_color": "#ffffff",
                "link": "http://alaskasnow.org/multi-zone-haines-forecasts/chilkat-pass-forecast/",
                "start_date": null,
                "end_date": null,
                "fillOpacity": 0.5,
                "fillIncrement": 0.1,
                "warning": {
                    "product": null
                }
            },
            "geometry": {
                "type": "Polygon",
                "coordinates": [
                    [
                        [
                            -136.6056,
                            59.723
                        ],
                        [
                            -136.6693,
                            59.7346
                        ],
                ...
```

