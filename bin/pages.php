<?php

//===============================================
// Pages Initialization
//===============================================

if( class_exists('Page') && method_exists('Page','register')){
	// Register variables
	Page::register("1", "meta", "");
}

// add hooks
if( class_exists('Controller') && method_exists('Controller','on') ){

	Controller::on("admin-edit", 'PageMeta' );

	Controller::on("admin-fields", 'PageMeta');

	Controller::on("admin-save", 'PageMeta' );

}

?>