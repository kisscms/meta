<h3>Meta</h3>
<section id="meta">
<?
if( !isset( $meta ) ) $meta = array();
$index = 1;
foreach( $meta as $key => $value ){
?>
<fieldset id="meta-<?=$index?>">
	<a class="delete" align="right">[x]</a>
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
<script type="text/javascript" src="<?=url("/assets/js/admin/meta.js") ?>" data-type="require" data-path="admin-meta" data-deps="jquery"></script>
