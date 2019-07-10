<?php
/**
 * Post types
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

function tent_cpt_product() {
	$labels = array(
		'name'                  => _x( 'Products', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Product', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Products', 'text_domain' ),
		'name_admin_bar'        => __( 'Product', 'text_domain' ),
		'archives'              => __( 'Shop Archives', 'text_domain' ),
		'attributes'            => __( 'Product Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Product:', 'text_domain' ),
		'all_items'             => __( 'All Products', 'text_domain' ),
		'add_new_item'          => __( 'Add New Product', 'text_domain' ),
		'add_new'               => __( 'Add Product', 'text_domain' ),
		'new_item'              => __( 'New Product', 'text_domain' ),
		'edit_item'             => __( 'Edit Product', 'text_domain' ),
		'update_item'           => __( 'Update Product', 'text_domain' ),
		'view_item'             => __( 'View Product', 'text_domain' ),
		'view_items'            => __( 'View Shop', 'text_domain' ),
		'search_items'          => __( 'Find Product', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Product Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set product image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove product image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into product', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this product', 'text_domain' ),
		'items_list'            => __( 'Product list', 'text_domain' ),
		'items_list_navigation' => __( 'Product list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter product list', 'text_domain' ),
	);

	$args = array(
		'label'                 => __( 'Product', 'text_domain' ),
		'description'           => __( 'Product items', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'product-type' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
    'show_in_rest'          => true,
    'template_lock'         => 'all',
    'template'              => array(array(
      'core/paragraph', array(
        'placeholder' => 'Describe product...',
      ),
    )),

	);

  register_post_type('product', $args);
}

add_action('init', 'tent_cpt_product', 0);
