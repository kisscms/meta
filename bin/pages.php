<?php

//===============================================
// Pages Initialization
//===============================================

if( class_exists('Page') && method_exists(new Page(),'register')){
	// Register variables
	Page::register("1", "meta", "");
}

// add hooks
if( class_exists('Admin') && method_exists(new Admin(),'register')){
	Admin::register("edit-fields", AdminEditMeta);

	Admin::register("save", AdminSaveMeta);
}

?>