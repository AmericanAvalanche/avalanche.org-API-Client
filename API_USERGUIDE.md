# API User Guide

The public API provides access to the daily avalanche forecast in the US. This information should be treated as a summary, and for the full avalanche forecast see the individual avalanche center websites.

## How to interpret the avalanche forecast
More information can be found on avalanche.org:

* Danger Scale: https://avalanche.org/avalanche-encyclopedia/danger-scale/
* Avalanche education: https://avalanche.org/avalanche-education/

## Update cadence
Avalanche centers who publish a daily forecast will typically do so once a day in the morning. It is recommended to check often during the morning hours (6-10am Mountain Time). The season varies year to year and by avalanche center, but generally follows December - April.

Some avalanche centers publish information without a danger rating. These will show up as `no danger` throughout the season, but general backcountry conditions can be found by navigating to their site.

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
```

The above follows the <a href='https://geojson.org/'>geojson spec</a>, and a description of the properties are:

* name: Zone name
* center: Avalanche center name
* center_link: Link to avalanche center website
* timezone: Timezone that the avalanche center uses
* center_id: The avalanche center acronym 
* state: The state which the avalanche center largely operates in
* travel_advice: The standard travel advice for the given danger rating
* danger: Textual representation of the danger rating
* danger_level: Numerical of the danger rating
* color: The danger rating color
* stroke: The danger rating outline color
* font_color: The font color which contrasts with the danger rating color
* link: Link to the forecast page for the given zone
* start_date: When the forecast was issued (ISO)
* end_date: When the forecast expires (ISO)
* warning: Populated if an avalanche warning is issued for the given zone


