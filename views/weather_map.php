
<!-- <link rel="stylesheet" type="text/css" href="http://snowobs-api.localhost/vendor/fontawesome-free-5.2.0-web/css/all.min.css" />
<link rel="stylesheet" type="text/css" href="https://api.snowobs.com/css/style_weather.css" />
<link rel="stylesheet" type="text/css" href="http://snowobs-api.localhost/css/weatherMap.css" />
<link rel="stylesheet" type="text/css" href="http://snowobs-api.localhost/css/weatherMapMaterial.css" />
<script type="text/javascript" src="https://api.snowobs.com/javascript/jqplot-wind/src/jquery.min.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBYlNqVp8DF70mOrzuoRm7XKtBEb-xeNco"></script>
<link rel="stylesheet" href="https://api.snowobs.com/javascript/fancybox/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
<script type="text/javascript" src="https://api.snowobs.com/javascript/fancybox/jquery.fancybox.pack.js?v=2.1.5"></script>
<link rel="stylesheet" href="https://api.snowobs.com/javascript/fancybox/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
<script type="text/javascript" src="https://api.snowobs.com/javascript/fancybox/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
<script type="text/javascript" src="https://api.snowobs.com/javascript/moment-js/moment.min.js"></script>
<script type="text/javascript" src="https://api.snowobs.com/javascript/moment-js/moment-timezone-2010-2020.min.js"></script>
<script type="text/javascript" src="http://snowobs-api.localhost/javascript/mapCurrentStations.js"></script>
<script type="text/javascript" src="http://snowobs-api.localhost/javascript/sideNavigation.js"></script>
<script type="text/javascript" src="https://api.snowobs.com/javascript/mapWebCams.js"></script>
<script type="text/javascript" src="https://api.snowobs.com/javascript/spin.js"></script>
<script type="text/javascript" src="https://api.snowobs.com/javascript/markerwithlabel.js"></script>
<script type="text/javascript" src="https://api.snowobs.com/javascript/oms.min.js"></script>
<script type="text/javascript" src="https://api.snowobs.com/javascript/ajaxSubmit.js"></script> -->

<script type="text/javascript" src="<?= $params['wx_base_url']; ?>/dist/js/loader.js" data-url = "<?= $params['wx_base_url']; ?>"></script>
<script type="text/javascript" src="<?= $params['wx_base_url']; ?>/dist/js/css_loader.js" data-url = "<?= $params['wx_base_url']; ?>"></script>

<div id="map_content">
	<div id="map-container" class="column">
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <div class="mapLabels" id="mapLabelMenu"></div>
            <div class="dropDownOptions" id="mapOptionsMenu"></div>
        </div>
        <span class = "sidenav-open" onclick="openNav()">&#9776;</span>
        <div id="so-legend"><div id = "so-legend-inner"></div></div>
        <div id="map">
        <div id="map-canvas"></div>   
      
    </div>	
</div>

<div id = 'so-wx-chart-modal' class = 'so-modal-background'>
    <div class = 'so-modal drop-shadow'>
        <div class = 'so-modal-close'><a href="javascript:void(0)" class="closebtn" id = 'so-modal-close-button'>&times;</a></div>
        <div class = 'so-modal-header'>
             
        </div>
        <div class = 'so-modal-body'>
        </div>
    </div>
</div>

<script type='text/javascript'>

    const soToken = "<?= $params['token']; ?>";
    const soAvyCenterId = "<?= $params['center_id']; ?>";

</script> 

