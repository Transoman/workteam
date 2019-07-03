<?php
  // Register Custom Post Type Vacancy
  function create__cpt() {

    $labels = array(
      'name' => _x( 'Вакансии', 'Post Type General Name', 'ith' ),
      'singular_name' => _x( 'Вакансия', 'Post Type Singular Name', 'ith' ),
      'menu_name' => _x( 'Вакансии', 'Admin Menu text', 'ith' ),
      'name_admin_bar' => _x( 'Вакансия', 'Add New on Toolbar', 'ith' ),
      'archives' => __( 'Архиа вакансий', 'ith' ),
//      'attributes' => __( 'Вакансия Attributes', 'ith' ),
//      'parent_item_colon' => __( 'Parent Вакансия:', 'ith' ),
//      'all_items' => __( 'All Вакансии', 'ith' ),
//      'add_new_item' => __( 'Add New Вакансия', 'ith' ),
//      'add_new' => __( 'Add New', 'ith' ),
//      'new_item' => __( 'New Вакансия', 'ith' ),
//      'edit_item' => __( 'Edit Вакансия', 'ith' ),
//      'update_item' => __( 'Update Вакансия', 'ith' ),
//      'view_item' => __( 'View Вакансия', 'ith' ),
//      'view_items' => __( 'View Вакансии', 'ith' ),
//      'search_items' => __( 'Search Вакансия', 'ith' ),
//      'not_found' => __( 'Not found', 'ith' ),
//      'not_found_in_trash' => __( 'Not found in Trash', 'ith' ),
//      'featured_image' => __( 'Featured Image', 'ith' ),
//      'set_featured_image' => __( 'Set featured image', 'ith' ),
//      'remove_featured_image' => __( 'Remove featured image', 'ith' ),
//      'use_featured_image' => __( 'Use as featured image', 'ith' ),
//      'insert_into_item' => __( 'Insert into Вакансия', 'ith' ),
//      'uploaded_to_this_item' => __( 'Uploaded to this Вакансия', 'ith' ),
//      'items_list' => __( 'Вакансии list', 'ith' ),
//      'items_list_navigation' => __( 'Вакансии list navigation', 'ith' ),
//      'filter_items_list' => __( 'Filter Вакансии list', 'ith' ),
    );
    $args = array(
      'label' => __( 'Вакансия', 'ith' ),
      'description' => __( '', 'ith' ),
      'labels' => $labels,
      'menu_icon' => 'dashicons-index-card',
      'supports' => array('title'),
      'taxonomies' => array(),
      'public' => false,
      'show_ui' => true,
      'show_in_menu' => true,
      'menu_position' => 5,
      'show_in_admin_bar' => true,
      'show_in_nav_menus' => true,
      'can_export' => true,
      'has_archive' => false,
      'hierarchical' => false,
      'exclude_from_search' => false,
      'show_in_rest' => true,
      'publicly_queryable' => true,
      'capability_type' => 'post',
    );
    register_post_type( 'vacancy', $args );

  }
  add_action( 'init', 'create__cpt', 0 );