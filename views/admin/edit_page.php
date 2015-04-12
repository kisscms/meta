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
$(document).ready(function(){
	// events
	$("#meta-create").click(function(){
		admin_meta_data_length++;
		var admin_meta_html = '<fieldset id="meta-'+ admin_meta_data_length +'"><input type="text" name="meta-key-'+ admin_meta_data_length +'" value=""><input type="text" name="meta-value-'+ admin_meta_data_length +'" value=""></fieldset>';
		$("section#meta").append = admin_meta_html;
	});
});
</script>