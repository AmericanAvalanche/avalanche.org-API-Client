
<!-- SnowObs API to load all necessary js/css -->
<script src="https://cdn.rawgit.com/Gmousse/dataframe-js/master/dist/dataframe-min.js"></script>
<script type="text/javascript" src="<?= $params['station_group_tables']; ?>/js/css_loader.js" data-url = "<?= $params['station_group_tables']; ?>"></script>
<script type="text/javascript" src="<?= $params['station_group_tables']; ?>/js/loader.js" data-url = "<?= $params['station_group_tables']; ?>"></script>

<div class='so' id="so-table-content">
  <div id="so-table-container" class="so-column">
	<!-- <div id="so-map-container" class="so-column">
        <div id="mySidenav" class="so-sidenav">
            <a href="javascript:void(0)" class="so-closebtn" onclick="closeNav()">&times;</a>
            <div class="so-mapLabels" id="mapLabelMenu"></div>
            <div class="so-dropDownOptions" id="mapOptionsMenu"></div>
        </div>
        <span class = "so-sidenav-open" onclick="openNav()">&#9776;</span>
        <div id="so-legend"><div id = "so-legend-inner"></div></div>
        <div id="so-map">
            <div id="so-map-canvas"></div>
        </div> -->
    </div>
</div>

<script type='text/javascript'>

    const token = "<?= $params['token']; ?>";
    const table_config = <?= json_encode($params['station_group_tables_config']); ?>;
    var group_table;
    window.onload = function () {
        group_table = new soGroupTable(token, table_config);
    };

</script>
