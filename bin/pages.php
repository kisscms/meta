<?php

//===============================================
// Pages Initialization
//===============================================

if( class_exists('Page') && method_exists(new Page(),'register')){
	// Register variables
	Page::register("1", "meta", "");
}

// add hooks
if( method_exists(new Admin(),'register')){
	Admin::register("page-fields", PageMeta::fields);

	Admin::register("page-save", PageMeta::save);
}

?>