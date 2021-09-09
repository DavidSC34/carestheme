<?php
/* 
* Metaboxes para el Homepage
*/

add_action('cmb2_admin_init', 'cares_campos_homepage');
/**
 * Hook in and add a metabox that only appears on the 'Home' page
 */
function cares_campos_homepage()
{
	$prefix = 'cares_homepage_';
	$id_home = get_option('page_on_front');
	/**
	 * Metabox to be displayed on a single page ID
	 */
	$cares_campos_homepage = new_cmb2_box(array(
		'id'           => $prefix . 'homepage',
		'title'        => esc_html__('Home Page Fields', 'cmb2'),
		'object_types' => array('page'), // Post type
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true, // Show field names on the left
		'show_on'      => array(
			'id' => array($id_home),
		), // Specific post IDs to display this metabox
	));

	$cares_campos_homepage->add_field(array(
		'name' => esc_html__('Main Text 1', 'cmb2'),
		'desc' => esc_html__('Text for main section 1', 'cmb2'),
		'id'   => $prefix . 'main_sec_text_1',
		'type' => 'text',
	));
	$cares_campos_homepage->add_field(array(
		'name' => esc_html__('Main Button Text 1', 'cmb2'),
		'desc' => esc_html__('Button Label for main section 1', 'cmb2'),
		'id'   => $prefix . 'main_sec_btn_1',
		'type' => 'text',
	));
	$cares_campos_homepage->add_field(array(
		'name' => esc_html__('Video Section Title ', 'cmb2'),
		'desc' => esc_html__('Text for video section', 'cmb2'),
		'id'   => $prefix . 'video_title',
		'type' => 'text',
	));

	// $cares_campos_homepage->add_field(array(
	// 	'name'    => esc_html__('Video Section Title', 'cmb2'),
	// 	'desc'    => esc_html__('Text for video section', 'cmb2'),
	// 	'id'      => $prefix . 'video_title',
	// 	'type'    => 'wysiwyg',
	// 	'options' => array(
	// 		'textarea_rows' => 5,
	// 	),
	// ));
}
