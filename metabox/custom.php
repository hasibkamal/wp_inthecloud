<?php
add_action('cmb2_admin_init','custom_metaboxes');

function custom_metaboxes(){
	$metaBox = new_cmb2_box([
		'object_types'=>['post'],
		'id'=>'additional-fields',
		'title'=>'Additional Field'
	]);

	$metaBox->add_field([
		'name'=>'Subtitle',
		'id'=>'subtitle',
		'type'=>'wysiwyg'
	]);	
	$metaBox->add_field([
		'name'=>'Other',
		'id'=>'other',
		'type'=>'ombed'
	]);


	$portfolioMetaBox = new_cmb2_box([
		'object_types'=>['portfolio'],
		'id'=>'portfolio-additional-fields',
		'title'=>'Portfolio Additional Fields'
	]);

	$portfolioMetaBox->add_field([
		'id'=>'portfolio_designation',
		'name'=>'Portfoilo Designation',
		'type'=>'text'
	]);

	$portfolioMetaBox->add_field([
		'id'=>'portfolio_details',
		'name'=> 'Portfolio Details',
		'type'=> 'wysiwyg',
		'options'=> [
			'textarea_rows'=> get_option('default_post_edit_rows',3)
		]
	]);
}