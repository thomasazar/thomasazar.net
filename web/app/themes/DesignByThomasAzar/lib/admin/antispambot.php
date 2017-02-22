<?php

function azar_email( $atts, $content = null ){
	$email = antispambot( "$content" );
	return "<a href='mailto:$email'>$email</a>";
}
add_shortcode( 'email', 'azar_email' );
