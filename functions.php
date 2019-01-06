<?php
require_once('CustomNavWalker.php');
if(file_exists(dirname(__FILE__).'/metabox/init.php')){
	require_once(dirname(__FILE__).'/metabox/init.php');
}

if(file_exists(dirname(__FILE__).'/metabox/custom.php')){
	require_once(dirname(__FILE__).'/metabox/custom.php');
}

function inthecloudSetup(){
	load_theme_textdomain('inthecloud',get_template_directory().'/languages');
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
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

	register_post_type('portfolio',[
		'labels'=>[
			'name'=> 'Portfolio',
			'add_new_item'=>'Add new portfolio',
			'view_item'=>'View portfolio',
		],
		'public'=>true,
		'menu_icon'=>'dashicons-edit',
		'menu_position'=>1,
		'supports'=> ['title','thumbnail']
	]);

	
}

add_action('after_setup_theme','inthecloudSetup');

function inthecloudScripts(){
	wp_enqueue_style('inthecloud-style',get_stylesheet_uri());
}

function adminScripts(){
	wp_enqueue_style('font-awesome',get_template_directory_uri().'/css/font-awesome.min.css');
}

add_action('admin_enqueue_scripts','adminScripts');
add_action('wp_enqueue_scripts','inthecloudScripts');


function basicHook($a,$b){
	echo "First Value : $a <br/>";
	echo "Second Value : $b <br/>";
}
add_action('ahook','basicHook',1,10);

add_filter('hasibkamal','testFunction');

function testFunction($a){
	return "HKC $a";
}




