
<!-- SnowObs API to load all necessary js/css -->
<script type="text/javascript" src="<?= $params['wx_base_url']; ?>/js/css_loader.js" data-url = "<?= $params['wx_base_url']; ?>"></script>
<script type="text/javascript" src="<?= $params['wx_base_url']; ?>/js/loader.js" data-url = "<?= $params['wx_base_url']; ?>"></script>

<button type="button" class="so btn btn-raised btn-info" id = "so-table-toggle" data-view = "table">Table View</button>
<div class='so-map' id="so-map-content">
	<div id="so-map-container" class="so-column">
        <div id="mySidenav" class="so-sidenav">
            <a href="javascript:void(0)" class="so-closebtn" onclick="closeNav()">&times;</a>
            <div class="so-mapLabels" id="mapLabelMenu"></div>
            <div class="so-dropDownOptions" id="mapOptionsMenu"></div>
        </div>
        <span class = "so-sidenav-open" onclick="openNav()">&#9776;</span>
        <div id="so-legend"><div id = "so-legend-inner"></div></div>
        <div id="so-map">
            <div id="so-map-canvas"></div>
        </div>
    </div>
</div>

<div id = "so-table-content" class = "so-view-hide"></div>

<div id = 'so-wx-chart-modal' class = 'so-modal-background'>
	<div class = 'so-modal drop-shadow'>
		<div class = 'so-modal-close'><a href="javascript:void(0)" class="closebtn" id = 'so-modal-close-button'>&times;</a></div>
		<div class = 'so-modal-header'></div>
		<div class = 'so-modal-body'></div>
	</div>
</div>

<script type='text/javascript'>

    const token = "<?= $params['token']; ?>";
    var map;
    window.onload = function () {
        map = new soMap();
        map.buildMap(token, false);
    };

</script>
