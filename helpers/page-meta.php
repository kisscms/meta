<?php

class PageMeta {

	public static function edit( &$data ){
		// add meta containers
		foreach( $data['body'] as $body ){
			if( !array_key_exists('meta', $body ) $body['meta'] = array();
		}
	}

	public static function fields( &$data ){
		$view = View::do_fetch('admin/page-meta-fields', $data );
		return $view;
	}

	public static function save( &$data ){
	}
}

?>