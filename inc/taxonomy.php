<?php

// Register Custom Taxonomy
function register_projects_industries_taxonomy() {
    $labels = array(
        'name'                       => _x('industries', 'Taxonomy General Name', 'tbb-plugin'),
        'singular_name'              => _x('industry', 'Taxonomy Singular Name', 'tbb-plugin'),
        'menu_name'                  => __('industries', 'tbb-plugin'),
        'all_items'                  => __('All industries', 'tbb-plugin'),
        'parent_item'                => __('Parent industry', 'tbb-plugin'),
        'parent_item_colon'          => __('Parent industry:', 'tbb-plugin'),
        'new_item_name'              => __('New industry Name', 'tbb-plugin'),
        'add_new_item'               => __('Add New industry', 'tbb-plugin'),
        'edit_item'                  => __('Edit industry', 'tbb-plugin'),
        'update_item'                => __('Update industry', 'tbb-plugin'),
        'view_item'                  => __('View industry', 'tbb-plugin'),
        'search_items'               => __('Search industries', 'tbb-plugin'),
    );

    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => false,
        'public'                     => true,
        'publicly_queryable'         => true,
        'show_ui'                    => true,
        'show_in_menu'               => true,
        'show_in_nav_menus'          => true,
        'show_in_rest'               => true,
        'rest_base'                  => 'projects_industries',
        'show_tagcloud'              => true,
        'show_in_quick_edit'         => true,
        'show_admin_column'          => true,
    );

    register_taxonomy('projects_industries', ["project"], $args);
}
add_action('init', 'register_projects_industries_taxonomy', 0);

// taxonomy  for Technonlogies

// Register Custom Taxonomy
function register_projects_technologies_taxonomy() {
    $labels = array(
        'name'                       => _x('technologies', 'Taxonomy General Name', 'text-domain'),
        'singular_name'              => _x('technology', 'Taxonomy Singular Name', 'text-domain'),
        'menu_name'                  => __('technologies', 'text-domain'),
        'all_items'                  => __('All technologies', 'text-domain'),
        'parent_item'                => __('Parent technology', 'text-domain'),
        'parent_item_colon'          => __('Parent technology:', 'text-domain'),
        'new_item_name'              => __('New technology Name', 'text-domain'),
        'add_new_item'               => __('Add New technology', 'text-domain'),
        'edit_item'                  => __('Edit technology', 'text-domain'),
        'update_item'                => __('Update technology', 'text-domain'),
        'view_item'                  => __('View technology', 'text-domain'),
        'search_items'               => __('Search technologies', 'text-domain'),
    );

    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => false,
        'public'                     => true,
        'publicly_queryable'         => true,
        'show_ui'                    => true,
        'show_in_menu'               => true,
        'show_in_nav_menus'          => true,
        'show_in_rest'               => true,
        'rest_base'                  => 'projects_technologies',
        'show_tagcloud'              => true,
        'show_in_quick_edit'         => true,
        'show_admin_column'          => true,
    );

    register_taxonomy('projects_technologies', ["project"], $args);
}
add_action('init', 'register_projects_technologies_taxonomy', 0);