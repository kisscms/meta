<?php

class PageMeta {

	public static function edit( &$data ){
		// add meta containers
		foreach( $data['body'] as $k => $body ){
			if( !array_key_exists('meta', $body ) ) $body['meta'] = array();
			if( is_string( $body['meta'] ) ) $body['meta'] = json_decode($body['meta'], true);
			// save reference
			$data['body'][$k]['meta'] = $body['meta'];
		}
	}

	public static function fields( &$data ){
		$view = View::do_fetch( getPath('views/admin/page-meta-fields.php'), $data );
		echo $view; // return instead?
	}

	public static function save( &$data ){
	}
}

?>