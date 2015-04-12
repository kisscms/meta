$(document).ready(function(){
	// events
	$("#meta-create").click(function(){
		admin_meta_data_length++;
		var admin_meta_html = '<fieldset id="meta-'+ admin_meta_data_length +'"><input type="text" name="meta-key-'+ admin_meta_data_length +'" value=""><input type="text" name="meta-value-'+ admin_meta_data_length +'" value=""></fieldset>';
		$("section#meta").append( admin_meta_html );
	});
});
