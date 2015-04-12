<?php

//===============================================
// Pages Initialization
//===============================================

if( class_exists('Page') && method_exists('Page','register')){
	// Register variables
	Page::register("1", "meta", "");
}

// add hooks
if( class_exists('Controller') && method_exists('Controller','add_hook') ){
	Controller::add_hook("page-edit", PageMeta::edit);

	Controller::add_hook("page-fields", PageMeta::fields);

	Controller::add_hook("page-save", PageMeta::save);
}

?>