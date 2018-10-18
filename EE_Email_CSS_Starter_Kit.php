<?php
/*
Plugin Name: Event Espresso - Email CSS Starter kit
Description: Includes files you can use to get started with customizing Event Espresso's email CSS. Requires Event Espresso 4.
Author: Josh Feck
Version: 1.0
*/

function ee_email_css_variation( 
	$variation_path, 
	$messenger, 
	$message_type, 
	$type, 
	$variation, 
	$file_extension, 
	$url, 
	EE_Messages_Template_Pack $template_pack 
) {
	if ( $messenger != 'email' ) {
		return $variation_path;
	}
	return plugin_dir_url( __FILE__ ) . 'css/email_styles.css';
}

add_filter( 
	'FHEE__EE_Messages_Template_Pack__get_variation', 
	'ee_email_css_variation', 
	10, 
	8 
);
