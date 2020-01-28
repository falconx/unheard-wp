<?php

function post_remove() { 
	remove_menu_page( 'edit.php' );
}

add_action( 'admin_menu', 'post_remove' );

function init_remove_support() {
   remove_post_type_support( 'page', 'editor' );
}

add_action( 'init', 'init_remove_support' );

function remove_page_attributes_box() {
	remove_meta_box( 'pageparentdiv', 'page', 'normal' );
}

add_action( 'admin_menu', 'remove_page_attributes_box' );

function remove_image_box() {
	remove_meta_box( 'postimagediv', 'page', 'side' );
}

add_action( 'do_meta_boxes', 'remove_image_box' );