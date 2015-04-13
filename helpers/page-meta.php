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
		$meta = array();
		//$key, $value;

		foreach( $data as $i => $field ){
			// find meta fields
			if( strpos($i, 'meta-') === false ) continue;
			if( strpos($i, 'meta-key-') !== false ){
				$key = $field;
				unset($data[$i]);
			};
			if( strpos($i, 'meta-value-') !== false ){
				$value = $field;
				unset($data[$i]);
			};
			if( isset($key) && isset($value) ){
				$meta[$key] = $value;
				// reset
				unset($key);
				unset($value);
			}

		}
		$data['meta'] = json_encode( $meta );
	}
}

?>