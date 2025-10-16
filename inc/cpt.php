<?php


// Register Custom Post Type
function register_project_post_type() {
    $labels = array(
        'name'                  => _x('projects', 'Post Type General Name', 'tbb-plugin'),
        'singular_name'         => _x('project', 'Post Type Singular Name', 'tbb-plugin'),
        'menu_name'            => __('projects', 'tbb-plugin'),
        'all_items'            => __('All projects', 'tbb-plugin'),
        'add_new_item'         => __('Add New project', 'tbb-plugin'),
        'add_new'              => __('Add New', 'tbb-plugin'),
        'edit_item'            => __('Edit project', 'tbb-plugin'),
        'update_item'          => __('Update project', 'tbb-plugin'),
        'search_items'         => __('Search project', 'tbb-plugin'),
    );

    $args = array(
        'label'                 => __('project', 'tbb-plugin'),
        'labels'                => $labels,
        'supports'              => ["title","editor","thumbnail","excerpt","author","revisions"],
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_icon'             => 'dashicons-images-alt2',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
    );

    register_post_type('project', $args);
}
add_action('init', 'register_project_post_type', 0);