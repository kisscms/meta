<?php

class PageMeta {

	public static function edit( $data ){
	}

	public static function fields( $data ){
		$view = View::do_fetch('admin/page-meta-fields', $data );
		return $view;
	}

	public static function save( $data ){
	}
}

?>