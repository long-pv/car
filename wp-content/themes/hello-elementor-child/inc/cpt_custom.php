<?php
function register_cpt_post_types()
{
    $cpt_list = [
        'staff' => [
            'labels' => __('Staff', 'child_theme'),
            'slug' => 'staff',
            'cap' => false,
            'hierarchical' => false,
            'position' => false
        ],
        'staff_about_us' => [
            'labels' => __('Staff (About us)', 'child_theme'),
            'slug' => 'staff_about_us',
            'cap' => false,
            'hierarchical' => false,
            'position' => false
        ],
        'partner' => [
            'labels' => __('Partner', 'child_theme'),
            'slug' => 'partner',
            'cap' => false,
            'hierarchical' => false,
            'position' => false
        ],
        'recruitment' => [
            'labels' => __('Recruitment', 'child_theme'),
            'slug' => 'recruitment',
            'cap' => false,
            'hierarchical' => false,
            'position' => false
        ],
        'department' => [
            'labels' => __('Departments', 'child_theme'),
            'slug' => 'department',
            'cap' => false,
            'hierarchical' => false,
            'position' => false
        ],
    ];

    $cpt_tax = [
        'location' => [
            'labels' => __('Location', 'child_theme'),
            'slug' => 'location',
            'cap' => false,
            'post_type' => ['recruitment']
        ],
    ];

    foreach ($cpt_list as $post_type => $data) {
        register_cpt($post_type, $data);
    }

    foreach ($cpt_tax as $ctx => $data) {
        register_ctx($ctx, $data);
    }
}
add_action('init', 'register_cpt_post_types');

function register_cpt($post_type, $data = [])
{
    $hierarchical = !empty($data['hierarchical']) ? $data['hierarchical'] : false;
    $position = !empty($data['position']) ? $data['position'] : 30;
    $attributes = $hierarchical == true ? 'page-attributes' : '';

    $labels = [
        'name' => $data['labels'],
        'singular_name' => $data['labels'],
        'menu_name' => $data['labels'],
    ];

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'has_archive'        => true,
        'rewrite'            => array(
            'slug'           => $data['slug'] ?? $post_type,
            'with_front'     => false,
            'hierarchical'   => true,
        ),
        'supports'           => array('title', 'editor', 'thumbnail', 'revisions', 'author', $attributes),
        'show_in_nav_menus'  => true,
        'show_ui'            => true,
        'menu_icon'          => 'dashicons-admin-post',
        'archive_title'      => $data['labels'],
        'menu_position'      => $position,
    );

    if (!empty($data['tax'])) {
        $args['taxonomies'] = $data['tax'];
    }

    if (!empty($data['cap'])) {
        $capabilities = [
            'create_posts' => 'create_' . $post_type,
            'delete_others_posts' => 'delete_' . $post_type,
            'delete_posts' => 'delete_' . $post_type,
            'delete_private_posts' => 'delete_private_' . $post_type,
            'delete_published_posts' => 'delete_published_' . $post_type,
            'edit_others_posts' => 'edit_others_' . $post_type,
            'edit_posts' => 'edit_' . $post_type,
            'edit_private_posts' => 'edit_private_' . $post_type,
            'edit_published_posts' => 'edit_published_' . $post_type,
            'publish_posts' => 'publish_' . $post_type,
            'read_private_posts' => 'read_private_' . $post_type,
        ];
        $args['capabilities'] = $capabilities;
    }

    register_post_type($post_type, $args);
}

function register_ctx($ctx, $data)
{
    $labels = [
        'name' => $data['labels'],
        'singular_name' => $data['labels'],
    ];

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array(
            'slug'          => $data['slug'] ?? $ctx,
            'with_front'    => false,
            'hierarchical'  => true,
        ),
    );

    if (!empty($data['cap'])) {
        $capabilities = [
            'manage_terms' => 'manage_' . $ctx,
            'edit_terms' => 'edit_' . $ctx,
            'delete_terms' => 'delete_' . $ctx,
            'assign_terms' => 'assign_' . $ctx,
        ];
        $args['capabilities'] = $capabilities;
    }

    register_taxonomy($ctx, $data['post_type'], $args);
}
