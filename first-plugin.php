<?php
/*
Plugin Name: Webindia News
Description: This is a Webindia News plugin for WordPress.
Version: 1.0
Author: Janaki
*/
function custom_post_type_init() {
    $labels = array(
        'name' => 'Webindia News',
        'singular_name' => 'custom post type',
        'add_new' => 'Add New Post',
        'add_new_item' => 'Add New Post',
        'edit_item' => 'Edit Post',
        'new_item' => 'New Post',
        'all_items' => 'All Posts',
        'view_item' => 'View Post',
        'search_items' => 'Search Posts',
        'not_found' =>  'No Post Found',
        'not_found_in_trash' => 'No post found in Trash', 
        'parent_item_colon' => '',
        'menu_name' => 'Webindia News',
    );
    
    // register post type
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'cudtom-post-type'),
        'query_var' => true,
        'menu_icon' => 'dashicons-admin-site',
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'comments',
            'revisions',
            'thumbnail',
            'author',
            'page-attributes'
        )
    );
    register_post_type( 'cudtom-post-type', $args );
    
    // register taxonomy
    register_taxonomy(
        'custom-post-type-category', 
        'custom-post-type', 
        array(
            'hierarchical' => true, 
            'label' => 'Custom Post Type Category', 
            'query_var' => true, 
            'rewrite' => array( 'slug' => 'custom-post-type-category' )
        )
    );
}
add_action( 'init', 'custom_post_type_init' );

