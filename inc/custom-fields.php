<?php
/* 
* Metaboxes para el Homepage
*/

add_action( 'cmb2_admin_init', 'cares_campos_homepage' );
/**
 * Hook in and add a metabox that only appears on the 'Home' page
 */
function cares_campos_homepage() {
    $prefix = 'cares_homepage_';
    $id_home = get_option ('page_on_front');
	/**
	 * Metabox to be displayed on a single page ID
	 */
	$cares_campos_homepage = new_cmb2_box( array(
		'id'           => $prefix . 'homepage',
		'title'        => esc_html__( 'Campos home Page', 'cmb2' ),
		'object_types' => array( 'page' ), // Post type
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true, // Show field names on the left
		'show_on'      => array(
			'id' => array( 34 ),
		), // Specific post IDs to display this metabox
	) );

    $cares_campos_homepage->add_field( array(
		'name' => esc_html__( 'Un Texto', 'cmb2' ),
		'desc' => esc_html__( 'field description (optional)', 'cmb2' ),
		'id'   => $prefix . 'text',
		'type' => 'text',
	) );
}