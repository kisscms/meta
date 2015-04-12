<?php

//===============================================
// Pages Initialization
//===============================================

if( class_exists('Page') && method_exists('Page','register')){
	// Register variables
	Page::register("1", "meta", "");
}

// add hooks
if( class_exists('Controller') && method_exists('Controller','register') ){
	Controller::register("page-edit", PageMeta::edit);

	Controller::register("page-fields", PageMeta::fields);

	Controller::register("page-save", PageMeta::save);
}

?>