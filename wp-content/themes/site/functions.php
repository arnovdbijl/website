<?php

function additional_custom_styles() {

/*Enqueue The Styles*/
wp_enqueue_style( 'styles', get_template_directory_uri() . '/css/style.css' );
}
add_action( 'wp_enqueue_scripts', 'additional_custom_styles' );