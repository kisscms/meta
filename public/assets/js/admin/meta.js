$(document).ready(function(){
	// events
	$("#meta-create").click(function( e ){
		e.preventDefault();
		admin_meta_data_length++;
		var admin_meta_html = '<fieldset id="meta-'+ admin_meta_data_length +'"><a href="#" class="delete" align="right">[x]</a><input type="text" name="meta-key-'+ admin_meta_data_length +'" value=""><input type="text" name="meta-value-'+ admin_meta_data_length +'" value=""></fieldset>';
		$("section#meta").append( admin_meta_html );
	});
	$("section#meta fieldset a.delete").click(function( e ){
		e.preventDefault();
		$el = $(e.target).closest("fieldset");
		$el.remove();
		return false;
	});
});

