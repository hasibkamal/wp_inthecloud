<?php
function inthecloudSetup(){
	load_theme_textdomain('inthecloud',get_template_directory().'/languages');
	add_theme_support('title-tag');
	add_theme_support('custom-header',[
		'default-image'=>get_template_directory_uri().'/images/picture.jpg',
		'height'=>237,
		'width'=>900
	]);
	add_theme_support('custom-background',[
		'default-image'=>get_template_directory_uri().'/images/background.png'
	]);

	register_nav_menus([
		'primary'=>__('Primary Menu','inthecloud')
	]);
}

add_action('after_setup_theme','inthecloudSetup');

function inthecloudScripts(){
	wp_enqueue_style('inthecloud-style',get_stylesheet_uri());
}

add_action('wp_enqueue_scripts','inthecloudScripts');

require_once('CustomNavWalker.php');