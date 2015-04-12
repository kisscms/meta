<?
	if( !isset( $meta ) ) $meta = array();
?>
<h3>Meta</h3>
<section id="meta">
<?
$index = 1;
foreach( $meta as $key => $value ){
?>
<fieldset id="meta-<?=$index?>">
	<input type="text" name="meta-key-<?=$index?>" value="<?=$key?>">
	<input type="text" name="meta-value-<?=$index?>" value="<?=$value?>">
</fieldset>
<?
$index++;
}
?>
</section>
<button id="meta-create">Add new</button>
<script type="text/javascript">
var admin_meta_data = <?=json_encode($meta) ?>;
var admin_meta_data_length = admin_meta_data.length;
</script>
<script type="text/javascript" "<?=url("/assets/js/admin/meta.js") ?>" data-type="require" data-path="admin-meta" data-deps="jquery"></script>
