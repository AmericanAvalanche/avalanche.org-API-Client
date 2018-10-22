<link href = '//fonts.googleapis.com/css?family=Muli:300|Roboto' rel='stylesheet' type='text/css'>
<link href = "<?= $params['base_url']; ?>/css/map.css?version=1.02" rel="stylesheet" type="text/css">

<script type="text/javascript" src="<?= $params['base_url']; ?>/js/v2/avy-org-map.min.js?version=1.01"></script>
<div id = "nac-map-container">
    <div id="nac-maparea"></div>
</div>

<script>
    let map = new AvalancheForecastMap('<?= $params['center_id']; ?>', <?= json_encode($params['options']); ?>);//{basemap_color: 'color', map_height: 300, danger_scale: 'top', zoom_level:6});
    map.createMap();
</script>