<?php

//===============================================
// Pages Initialization
//===============================================

if( class_exists('Page') && method_exists('Page','register')){
	// Register variables
	Page::register("1", "meta", "");
}

// add hooks
if( class_exists('Event') && method_exists('Event','on') ){

	Event::on("admin:edit", 'PageMeta' );

	Event::on("page:read", 'PageMeta');

	Event::on("admin:fields", 'PageMeta');

	Event::on("admin:save", 'PageMeta' );

}

?>