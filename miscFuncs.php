<?php
function redirect_user( $page ) {
	$url = 'http://' . $_SERVER[ 'HTTP_HOST' ] . dirname( $_SERVER[ 'PHP_SELF' ] );
	$url = rtrim( $url, '/\\' );
	$url .= '/' . $page;
	
	header( "Location: $url" );
	
	exit();
}
?>
