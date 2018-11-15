
<!-- SnowObs API to load all necessary js/css -->
<script type="text/javascript" src="<?= $params['station_group_tables']; ?>/js/css_loader.js" data-url = "<?= $params['station_group_tables']; ?>"></script>
<script type="text/javascript" src="<?= $params['station_group_tables']; ?>/js/loader.js" data-url = "<?= $params['station_group_tables']; ?>"></script>

<div class='so' id="so-table-content">
  <div id="so-table-container">
  </div>
</div>

<script type='text/javascript'>

  const token = "<?= $params['token']; ?>";
  const table_config = <?= json_encode($params['station_group_tables_config']); ?>;
  const table_name = "<?= $params['group_table_name']; ?>";
  var group_table;
  window.onload = function () {
    group_table = new soGroupTable(token, table_config, table_name);
  };

</script>
