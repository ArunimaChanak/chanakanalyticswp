<?php

function Chanak_service()
{
    $labels = [
        'name' => 'service',
        'singular_name' => 'service',
        'menu_name' => 'service',
        'name_admin_bar' => 'service',
        'archives' => 'serviceArchives',
        'attributes' => 'Item Attributes',
        'parent_item_colon' => 'Parent Item:',
        'all_items' => 'All Items',
        'add_new_item' => 'Add New Item',
        'add_new' => 'Add New',
        'new_item' => 'New Item',
        'edit_item' => 'Edit Item',
        'update_item' => 'Update Item',
        'view_item' => 'View Item',
        'view_items' => 'View Items',
        'search_items' => 'Search Item',
        'not_found' => 'Not found',
        'not_found_in_trash' => 'Not found in Trash',
        'featured_image' => 'Featured Image',
        'set_featured_image' => 'Set featured image',
        'remove_featured_image' => 'Remove featured image',
        'use_featured_image' => 'Use as featured image',
        'insert_into_item' => 'Insert into item',
        'uploaded_to_this_item' => 'Uploaded to this item',
        'items_list' => 'Items list',
        'items_list_navigation' => 'Items list navigation',
        'filter_items_list' => 'Filter items list',
    ];
    $args = [
        'label' => 'service',
        'description' => 'Post Type Description',
        'labels' => $labels,
        'supports' => ['title', 'thumbnail'],
        'taxonomies' => ['category'],
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 2,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'post',
    ];
    register_post_type('service', $args);
}
add_action('init', 'Chanak_service', 0);

function Chanak_local_landing()
{
    $labels = [
        'name' => 'local_landing',
        'singular_name' => 'local_landing',
        'menu_name' => 'local_landing',
        'name_admin_bar' => 'local_landing',
        'archives' => 'local_landingArchives',
        'attributes' => 'Item Attributes',
        'parent_item_colon' => 'Parent Item:',
        'all_items' => 'All Items',
        'add_new_item' => 'Add New Item',
        'add_new' => 'Add New',
        'new_item' => 'New Item',
        'edit_item' => 'Edit Item',
        'update_item' => 'Update Item',
        'view_item' => 'View Item',
        'view_items' => 'View Items',
        'search_items' => 'Search Item',
        'not_found' => 'Not found',
        'not_found_in_trash' => 'Not found in Trash',
        'featured_image' => 'Featured Image',
        'set_featured_image' => 'Set featured image',
        'remove_featured_image' => 'Remove featured image',
        'use_featured_image' => 'Use as featured image',
        'insert_into_item' => 'Insert into item',
        'uploaded_to_this_item' => 'Uploaded to this item',
        'items_list' => 'Items list',
        'items_list_navigation' => 'Items list navigation',
        'filter_items_list' => 'Filter items list',
    ];
    $args = [
        'label' => 'local_landing',
        'description' => 'Post Type Description',
        'labels' => $labels,
        'supports' => ['title', 'thumbnail'],
        'taxonomies' => ['category'],
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 3,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'local-landing'),
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'post',
    ];
    register_post_type('local_landing', $args);
}
add_action('init', 'Chanak_local_landing', 0);

function Chanak_casestudy()
{
    $labels = [
        'name' => 'casestudy',
        'singular_name' => 'casestudy',
        'menu_name' => 'casestudy',
        'name_admin_bar' => 'casestudy',
        'archives' => 'casestudyArchives',
        'attributes' => 'Item Attributes',
        'parent_item_colon' => 'Parent Item:',
        'all_items' => 'All Items',
        'add_new_item' => 'Add New Item',
        'add_new' => 'Add New',
        'new_item' => 'New Item',
        'edit_item' => 'Edit Item',
        'update_item' => 'Update Item',
        'view_item' => 'View Item',
        'view_items' => 'View Items',
        'search_items' => 'Search Item',
        'not_found' => 'Not found',
        'not_found_in_trash' => 'Not found in Trash',
        'featured_image' => 'Featured Image',
        'set_featured_image' => 'Set featured image',
        'remove_featured_image' => 'Remove featured image',
        'use_featured_image' => 'Use as featured image',
        'insert_into_item' => 'Insert into item',
        'uploaded_to_this_item' => 'Uploaded to this item',
        'items_list' => 'Items list',
        'items_list_navigation' => 'Items list navigation',
        'filter_items_list' => 'Filter items list',
    ];
    $args = [
        'label' => 'casestudy',
        'description' => 'Post Type Description',
        'labels' => $labels,
        'supports' => ['title', 'thumbnail'],
        'taxonomies' => ['category'],
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 4,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'post',
    ];
    register_post_type('casestudy', $args);
}
add_action('init', 'Chanak_casestudy', 0);

function Chanak_Portfolios()
{
    $labels = [
        'name' => _x('Portfolios', 'Post Type General Name', 'source'),
        'singular_name' => _x('Portfolio', 'Post Type Singular Name', 'source'),
        'menu_name' => __('Portfolios', 'source'),
        'name_admin_bar' => __('Portfolio', 'source'),
        'archives' => __('Item Archives', 'source'),
        'all_items' => __('All Portfolios', 'source'),
        'add_new_item' => __('Add New Portfolio', 'source'),
        'add_new' => __('Add Portfolio', 'source'),
        'new_item' => __('New Portfolio', 'source'),
        'edit_item' => __('Edit Portfolio', 'source'),
        'update_item' => __('Update Portfolio', 'source'),
        'view_item' => __('View Portfolio', 'source'),
        'view_items' => __('View Portfolio', 'source'),
        'search_items' => __('Search Portfolio', 'source'),
        'not_found' => __('Not found', 'source'),
        'not_found_in_trash' => __('Not found in Trash', 'source'),
        'featured_image' => __('Featured Image', 'source'),
        'set_featured_image' => __('Set featured image', 'source'),
        'remove_featured_image' => __('Remove featured image', 'source'),
        'use_featured_image' => __('Use as featured image', 'source'),
        'insert_into_item' => __('Insert into service', 'source'),
        'uploaded_to_this_item' => __('Uploaded to this item', 'source'),
        'items_list' => __('Portfolio list', 'source'),
        'items_list_navigation' => __('Portfolio list navigation', 'source'),
        'filter_items_list' => __('Filter Portfolio list', 'source'),
    ];

    $capabilities = [
        'publish_posts' => 'publish_pfs',
        'edit_posts' => 'edit_pfs',
        'edit_others_posts' => 'edit_others_pfs',
        'delete_posts' => 'delete_pfs',
        'delete_others_posts' => 'delete_others_pfs',
        'read_private_posts' => 'read_private_pfs',
        'edit_post' => 'edit_pf',
        'delete_post' => 'delete_pf',
        'read_post' => 'read_pf',
    ];

    $args = [
        'label' => __('subscribe newsletter', 'source'),
        'description' => __('subscribe newsletter Area', 'source'),
        'labels' => $labels,
        'supports' => [
            'title',
            'editor',
            'thumbnail',
        ] /* 'excerpt', 'thumbnail', 'revisions' */,
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-archive',
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => true,
        'publicly_queryable' => false,
        'rewrite' => ['slug' => 'portfolioView'],
        'capabilities' => $capabilities,
        'map_meta_cap' => true,
        'capability_type' => 'post',
        'show_in_rest' => false,
    ];

    register_post_type('portfolios', $args);
}
add_action('init', 'Chanak_Portfolios');

function Chanak_blog()
{
    $labels = [
        'name' => 'blog',
        'singular_name' => 'blog',
        'menu_name' => 'blog',
        'name_admin_bar' => 'blog',
        'archives' => 'blogArchives',
        'attributes' => 'Item Attributes',
        'parent_item_colon' => 'Parent Item:',
        'all_items' => 'All Items',
        'add_new_item' => 'Add New Item',
        'add_new' => 'Add New',
        'new_item' => 'New Item',
        'edit_item' => 'Edit Item',
        'update_item' => 'Update Item',
        'view_item' => 'View Item',
        'view_items' => 'View Items',
        'search_items' => 'Search Item',
        'not_found' => 'Not found',
        'not_found_in_trash' => 'Not found in Trash',
        'featured_image' => 'Featured Image',
        'set_featured_image' => 'Set featured image',
        'remove_featured_image' => 'Remove featured image',
        'use_featured_image' => 'Use as featured image',
        'insert_into_item' => 'Insert into item',
        'uploaded_to_this_item' => 'Uploaded to this item',
        'items_list' => 'Items list',
        'items_list_navigation' => 'Items list navigation',
        'filter_items_list' => 'Filter items list',
    ];
    $args = [
        'label' => 'Blog',
        'description' => 'Post Type Description',
        'labels' => $labels,
        'supports' => ['title', 'editor', 'thumbnail', 'comments', 'author'],
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 6,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'taxonomies' => ['category'],
        'capability_type' => 'post',
    ];
    register_post_type('blog', $args);
}
add_action('init', 'Chanak_blog', 0);

function Chanak_career()
{
    $labels = [
        'name' => 'career',
        'singular_name' => 'career',
        'menu_name' => __('career', 'source'),
        'name_admin_bar' => __('career', 'source'),
        'archives' => __('Item Archives', 'source'),
        'all_items' => __('All career', 'source'),
        'add_new_item' => __('Add New career', 'source'),
        'add_new' => __('Add career', 'source'),
        'new_item' => __('New career', 'source'),
        'edit_item' => __('Edit career', 'source'),
        'update_item' => __('Update career', 'source'),
        'view_item' => __('View career', 'source'),
        'view_items' => __('View career', 'source'),
        'search_items' => __('Search career', 'source'),
        'not_found' => __('Not found', 'source'),
        'not_found_in_trash' => __('Not found in Trash', 'source'),
        'featured_image' => __('Featured Image', 'source'),
        'set_featured_image' => __('Set featured image', 'source'),
        'remove_featured_image' => __('Remove featured image', 'source'),
        'use_featured_image' => __('Use as featured image', 'source'),
        'insert_into_item' => __('Insert into service', 'source'),
        'uploaded_to_this_item' => __('Uploaded to this item', 'source'),
        'items_list' => __('career list', 'source'),
        'items_list_navigation' => __('career list navigation', 'source'),
        'filter_items_list' => __('Filter career list', 'source'),
    ];

    $capabilities = [
        // 'create_posts'          => true,
        // 'read_post'             => 'read_post',
        // 'delete_post'           => 'delete_post',
        // 'read_private_posts'    => 'read_private_posts',
        // 'edit_posts' => 'edit_career',
        // 'edit_others_posts' => 'edit_others_career',
        // 'delete_posts' => 'delete_career',
        // 'delete_others_posts' => 'delete_others_career',
        // 'read_private_posts' => 'read_private_career',
        // 'edit_post' => 'edit_career',
        // 'delete_post' => 'delete_career',
        // 'read_post' => 'read_career'
    ];

    $args = [
        'label' => __('career', 'source'),
        'description' => __('career Area', 'source'),
        'labels' => $labels,
        'taxonomies' => ['category'],
        'supports' => [
            'title',
            'thumbnail',
        ] /* 'excerpt', 'thumbnail', 'revisions' */,
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 7,
        'menu_icon' => 'dashicons-archive',
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => true,
        'publicly_queryable' => true,
        // 'rewrite'               => array('slug' => 'career'),
        // 'capabilities'          => $capabilities,
        'map_meta_cap' => true,
        'capability_type' => 'post',
        'show_in_rest' => false,
    ];
    register_post_type('career', $args);
}
add_action('init', 'Chanak_career', 0);

function Chanak_job_application()
{
    $labels = [
        'name' => 'job_application',
        'singular_name' => 'job_application',
        'menu_name' => __('job_application', 'source'),
        'name_admin_bar' => __('job_application', 'source'),
        'archives' => __('Item Archives', 'source'),
        'all_items' => __('All job_application', 'source'),
        'add_new_item' => __('Add New job_application', 'source'),
        'add_new' => __('Add job_application', 'source'),
        'new_item' => __('New job_application', 'source'),
        'edit_item' => __('Edit job_application', 'source'),
        'update_item' => __('Update job_application', 'source'),
        'view_item' => __('View job_application', 'source'),
        'view_items' => __('View job_application', 'source'),
        'search_items' => __('Search job_application', 'source'),
        'not_found' => __('Not found', 'source'),
        'not_found_in_trash' => __('Not found in Trash', 'source'),
        'featured_image' => __('Featured Image', 'source'),
        'set_featured_image' => __('Set featured image', 'source'),
        'remove_featured_image' => __('Remove featured image', 'source'),
        'use_featured_image' => __('Use as featured image', 'source'),
        'insert_into_item' => __('Insert into service', 'source'),
        'uploaded_to_this_item' => __('Uploaded to this item', 'source'),
        'items_list' => __('job_application list', 'source'),
        'items_list_navigation' => __(
            'job_application list navigation',
            'source'
        ),
        'filter_items_list' => __('Filter job_application list', 'source'),
    ];

    $capabilities = [
        // 'create_posts'          => true,
        // 'read_post'             => 'read_post',
        // 'delete_post'           => 'delete_post',
        // 'read_private_posts'    => 'read_private_posts',
        // 'edit_posts' => 'edit_career',
        // 'edit_others_posts' => 'edit_others_career',
        // 'delete_posts' => 'delete_career',
        // 'delete_others_posts' => 'delete_others_career',
        // 'read_private_posts' => 'read_private_career',
        // 'edit_post' => 'edit_career',
        // 'delete_post' => 'delete_career',
        // 'read_post' => 'read_career'
    ];

    $args = [
        'label' => __('job_application', 'source'),
        'description' => __('job_application Area', 'source'),
        'labels' => $labels,
        'supports' => ['title'] /* 'excerpt', 'thumbnail', 'revisions' */,
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 8,
        'menu_icon' => 'dashicons-archive',
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => true,
        'publicly_queryable' => true,
        // 'rewrite'               => array('slug' => 'career'),
        // 'capabilities'          => $capabilities,
        'map_meta_cap' => true,
        'capability_type' => 'post',
        'show_in_rest' => false,
    ];
    register_post_type('job_application', $args);
}
add_action('init', 'Chanak_job_application', 0);

function Chanak_policy()
{
    $labels = [
        'name' => 'policy',
        'singular_name' => 'policy',
        'menu_name' => 'policy',
        'name_admin_bar' => 'policy',
        'archives' => 'policyArchives',
        'attributes' => 'Item Attributes',
        'parent_item_colon' => 'Parent Item:',
        'all_items' => 'All Items',
        'add_new_item' => 'Add New Item',
        'add_new' => 'Add New',
        'new_item' => 'New Item',
        'edit_item' => 'Edit Item',
        'update_item' => 'Update Item',
        'view_item' => 'View Item',
        'view_items' => 'View Items',
        'search_items' => 'Search Item',
        'not_found' => 'Not found',
        'not_found_in_trash' => 'Not found in Trash',
        'featured_image' => 'Featured Image',
        'set_featured_image' => 'Set featured image',
        'remove_featured_image' => 'Remove featured image',
        'use_featured_image' => 'Use as featured image',
        'insert_into_item' => 'Insert into item',
        'uploaded_to_this_item' => 'Uploaded to this item',
        'items_list' => 'Items list',
        'items_list_navigation' => 'Items list navigation',
        'filter_items_list' => 'Filter items list',
    ];
    $args = [
        'label' => 'policy',
        'description' => 'Post Type Description',
        'labels' => $labels,
        'supports' => ['title', 'editor'],
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 9,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => false,
        'map_meta_cap' => true,
        'capability_type' => 'post',
    ];
    register_post_type('policy', $args);
}
add_action('init', 'Chanak_policy', 0);

function Chanak_Industries()
{
    $labels = [
        'name' => _x('Industries', 'Post Type General Name', 'source'),
        'singular_name' => _x('Industry', 'Post Type Singular Name', 'source'),
        'menu_name' => __('Industries', 'source'),
        'name_admin_bar' => __('Industry', 'source'),
        'archives' => __('Item Archives', 'source'),
        'all_items' => __('All Industries', 'source'),
        'add_new_item' => __('Add New Industry', 'source'),
        'add_new' => __('Add Industry', 'source'),
        'new_item' => __('New Industry', 'source'),
        'edit_item' => __('Edit Industry', 'source'),
        'update_item' => __('Update Industry', 'source'),
        'view_item' => __('View Industry', 'source'),
        'view_items' => __('View Industry', 'source'),
        'search_items' => __('Search Industry', 'source'),
        'not_found' => __('Not found', 'source'),
        'not_found_in_trash' => __('Not found in Trash', 'source'),
        'featured_image' => __('Featured Image', 'source'),
        'set_featured_image' => __('Set featured image', 'source'),
        'remove_featured_image' => __('Remove featured image', 'source'),
        'use_featured_image' => __('Use as featured image', 'source'),
        'insert_into_item' => __('Insert into service', 'source'),
        'uploaded_to_this_item' => __('Uploaded to this item', 'source'),
        'items_list' => __('Industry list', 'source'),
        'items_list_navigation' => __('Industry list navigation', 'source'),
        'filter_items_list' => __('Filter Industry list', 'source'),
    ];

    $capabilities = [
        'publish_posts' => 'publish_iwss',
        'edit_posts' => 'edit_iwss',
        'edit_others_posts' => 'edit_others_iwss',
        'delete_posts' => 'delete_iwss',
        'delete_others_posts' => 'delete_others_iwss',
        'read_private_posts' => 'read_private_iwss',
        'edit_post' => 'edit_iws',
        'delete_post' => 'delete_iws',
        'read_post' => 'read_iws',
    ];

    $args = [
        'label' => __('subscribe newsletter', 'source'),
        'description' => __('subscribe newsletter Area', 'source'),
        'labels' => $labels,
        'supports' => [
            'title',
            'thumbnail',
        ] /* 'excerpt', 'thumbnail', 'revisions' */,
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 10,
        'menu_icon' => 'dashicons-admin-multisite',
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => true,
        'publicly_queryable' => false,
        'rewrite' => false,
        'capabilities' => $capabilities,
        'map_meta_cap' => true,
        'capability_type' => 'post',
        'show_in_rest' => false,
    ];

    register_post_type('industries', $args);
}
add_action('init', 'Chanak_Industries');

function Chanak_Testimonials()
{
    $labels = [
        'name' => _x('Testimonials', 'Post Type General Name', 'source'),
        'singular_name' => _x(
            'testimonials',
            'Post Type Singular Name',
            'source'
        ),
        'menu_name' => __('Testimonials', 'source'),
        'name_admin_bar' => __('testimonials', 'source'),
        'archives' => __('Item Archives', 'source'),
        'all_items' => __('All Testimonials', 'source'),
        'add_new_item' => __('Add New Testimonial', 'source'),
        'add_new' => __('Add Testimonial', 'source'),
        'new_item' => __('New Testimonial', 'source'),
        'edit_item' => __('Edit Testimonials', 'source'),
        'update_item' => __('Update Testimonials', 'source'),
        'view_item' => __('View Testimonials', 'source'),
        'view_items' => __('View Testimonials', 'source'),
        'search_items' => __('Search Testimonial', 'source'),
        'not_found' => __('Not found', 'source'),
        'not_found_in_trash' => __('Not found in Trash', 'source'),
        'featured_image' => __('Featured Image', 'source'),
        'set_featured_image' => __('Set featured image', 'source'),
        'remove_featured_image' => __('Remove featured image', 'source'),
        'use_featured_image' => __('Use as featured image', 'source'),
        'insert_into_item' => __('Insert into service', 'source'),
        'uploaded_to_this_item' => __('Uploaded to this item', 'source'),
        'items_list' => __('testimonials list', 'source'),
        'items_list_navigation' => __('testimonials list navigation', 'source'),
        'filter_items_list' => __('Filter testimonials list', 'source'),
    ];

    $capabilities = [
        'create_posts' => true,
        'read_post' => 'read_post',
        'delete_post' => 'delete_post',
        'read_private_posts' => 'read_private_posts',
    ];

    $args = [
        'label' => __('subscribe newsletter', 'source'),
        'description' => __('subscribe newsletter Area', 'source'),
        'labels' => $labels,
        'supports' => [
            'title',
        ] /* 'title', 'editor', 'excerpt', 'thumbnail', 'revisions' */,
        'hierarchical' => false,
        'taxonomies' => ['fashion_category'],
        'taxonomies' => ['category'],
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 11,
        'menu_icon' => 'dashicons-groups',
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => true,
        'publicly_queryable' => false,
        'rewrite' => false,
        'capabilities' => $capabilities,
        'map_meta_cap' => true,
        'capability_type' => 'post',
        'show_in_rest' => false,
    ];

    register_post_type('testimonial', $args);
}
add_action('init', 'Chanak_Testimonials');

function Chanak_Contact_Enquiry()
{
    $labels = [
        'name' => _x('Contact Enquiry', 'Post Type General Name', 'source'),
        'singular_name' => _x(
            'contact_enquiry',
            'Post Type Singular Name',
            'source'
        ),
        'menu_name' => __('Contact Enquiry', 'source'),
        'name_admin_bar' => __('copywriting_enquiry', 'source'),
        'archives' => __('Item Archives', 'source'),
        'all_items' => __('All contactus Enquiry', 'source'),
        'add_new_item' => __('Add New contactus Enquiry', 'source'),
        'add_new' => __('Add contactus Enquiry', 'source'),
        'new_item' => __('New contactus Enquiry', 'source'),
        'edit_item' => __('Edit contact_enquiry', 'source'),
        'update_item' => __('Update contact_enquiry', 'source'),
        'view_item' => __('View contact_enquiry', 'source'),
        'view_items' => __('View contact_enquiry', 'source'),
        'search_items' => __('Search contact_enquiry', 'source'),
        'not_found' => __('Not found', 'source'),
        'not_found_in_trash' => __('Not found in Trash', 'source'),
        'featured_image' => __('Featured Image', 'source'),
        'set_featured_image' => __('Set featured image', 'source'),
        'remove_featured_image' => __('Remove featured image', 'source'),
        'use_featured_image' => __('Use as featured image', 'source'),
        'insert_into_item' => __('Insert into contact', 'source'),
        'uploaded_to_this_item' => __('Uploaded to this item', 'source'),
        'items_list' => __('contact_enquiry list', 'source'),
        'items_list_navigation' => __(
            'contact_enquiry list navigation',
            'source'
        ),
        'filter_items_list' => __('Filter contact_enquiry list', 'source'),
    ];

    $capabilities = [
        'create_posts' => 'do_not_allow',
        'edit_posts' => 'edit_ces',
        'edit_others_posts' => 'edit_others_ces',
        'delete_posts' => 'delete_ces',
        'delete_others_posts' => 'delete_others_ces',
        'read_private_posts' => 'read_private_ces',
        'edit_post' => 'edit_ce',
        'delete_post' => 'delete_ce',
        'read_post' => 'read_ce',
    ];

    $args = [
        'label' => __('contact enquiry', 'source'),
        'description' => __('contact enquiry Area', 'source'),
        'labels' => $labels,
        'supports' => [''] /* 'title', 'editor' */,
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 12,
        'menu_icon' => 'dashicons-format-chat',
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => true,
        'publicly_queryable' => false,
        'rewrite' => false,
        'capabilities' => $capabilities,
        'map_meta_cap' => true,
        'capability_type' => 'post',
        'show_in_rest' => false,
    ];

    register_post_type('contact_enquiry', $args);
}
add_action('init', 'Chanak_Contact_Enquiry');

function Chanak_Quote_Enquiry()
{
    $labels = [
        'name' => _x('Quote Enquiry', 'Post Type General Name', 'source'),
        'singular_name' => _x(
            'quote_enquiry',
            'Post Type Singular Name',
            'source'
        ),
        'menu_name' => __('Quote Enquiry', 'source'),
        'name_admin_bar' => __('quote_enquiry', 'source'),
        'archives' => __('Item Archives', 'source'),
        'all_items' => __('All Quote Enquiry', 'source'),
        'add_new_item' => __('Add New Quote Enquiry', 'source'),
        'add_new' => __('Add Quote Enquiry', 'source'),
        'new_item' => __('New Quote Enquiry', 'source'),
        'edit_item' => __('Edit quote_enquiry', 'source'),
        'update_item' => __('Update quote_enquiry', 'source'),
        'view_item' => __('View quote_enquiry', 'source'),
        'view_items' => __('View quote_enquiry', 'source'),
        'search_items' => __('Search quote_enquiry', 'source'),
        'not_found' => __('Not found', 'source'),
        'not_found_in_trash' => __('Not found in Trash', 'source'),
        'featured_image' => __('Featured Image', 'source'),
        'set_featured_image' => __('Set featured image', 'source'),
        'remove_featured_image' => __('Remove featured image', 'source'),
        'use_featured_image' => __('Use as featured image', 'source'),
        'insert_into_item' => __('Insert into Quote', 'source'),
        'uploaded_to_this_item' => __('Uploaded to this item', 'source'),
        'items_list' => __('quote_enquiry list', 'source'),
        'items_list_navigation' => __(
            'quote_enquiry list navigation',
            'source'
        ),
        'filter_items_list' => __('Filter quote_enquiry list', 'source'),
    ];

    $capabilities = [
        'create_posts' => 'do_not_allow',
        'edit_posts' => 'edit_qes',
        'edit_others_posts' => 'edit_others_qes',
        'delete_posts' => 'delete_qes',
        'delete_others_posts' => 'delete_others_qes',
        'read_private_posts' => 'read_private_qes',
        'edit_post' => 'edit_qe',
        'delete_post' => 'delete_qes',
        'read_post' => 'read_qe',
    ];

    $args = [
        'label' => __('service enquiry', 'source'),
        'description' => __('service enquiry Area', 'source'),
        'labels' => $labels,
        'supports' => [''] /* 'title', 'editor' */,
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 13,
        'menu_icon' => 'dashicons-format-quote',
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => true,
        'publicly_queryable' => false,
        'rewrite' => false,
        'capabilities' => $capabilities,
        'map_meta_cap' => true,
        'capability_type' => 'post',
        'show_in_rest' => false,
    ];

    register_post_type('quote_enquiry', $args);
}
add_action('init', 'Chanak_Quote_Enquiry');

function Chanak_sub_newsletter()
{
    $labels = [
        'name' => _x('Newsletter', 'Post Type General Name', 'source'),
        'singular_name' => _x(
            'sub_newsletter',
            'Post Type Singular Name',
            'source'
        ),
        'menu_name' => __('Newsletter', 'source'),
        'name_admin_bar' => __('sub_newsletter', 'source'),
        'archives' => __('Item Archives', 'source'),
        'all_items' => __('All Newsletter', 'source'),
        'add_new_item' => __('Add New Newsletter', 'source'),
        'add_new' => __('Add Newsletter', 'source'),
        'new_item' => __('New Newsletter', 'source'),
        'edit_item' => __('Edit sub_newsletter', 'source'),
        'update_item' => __('Update sub_newsletter', 'source'),
        'view_item' => __('View sub_newsletter', 'source'),
        'view_items' => __('View sub_newsletter', 'source'),
        'search_items' => __('Search sub_newsletter', 'source'),
        'not_found' => __('Not found', 'source'),
        'not_found_in_trash' => __('Not found in Trash', 'source'),
        'featured_image' => __('Featured Image', 'source'),
        'set_featured_image' => __('Set featured image', 'source'),
        'remove_featured_image' => __('Remove featured image', 'source'),
        'use_featured_image' => __('Use as featured image', 'source'),
        'insert_into_item' => __('Insert into Newsletter', 'source'),
        'uploaded_to_this_item' => __('Uploaded to this item', 'source'),
        'items_list' => __('sub_newsletter list', 'source'),
        'items_list_navigation' => __(
            'sub_newsletter list navigation',
            'source'
        ),
        'filter_items_list' => __('Filter sub_newsletter list', 'source'),
    ];

    $capabilities = [
        'create_posts' => false,
        'read_post' => 'read_post',
        'delete_post' => 'delete_post',
        'read_private_posts' => 'read_private_posts',
    ];

    $args = [
        'label' => __('subscribe newsletter', 'source'),
        'description' => __('subscribe newsletter Area', 'source'),
        'labels' => $labels,
        'supports' => ['title'],
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 14,
        'menu_icon' => 'dashicons-admin-users',
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => true,
        'publicly_queryable' => false,
        'rewrite' => false,
        'capabilities' => $capabilities,
        'map_meta_cap' => true,
        'capability_type' => 'post',
        'show_in_rest' => false,
    ];

    register_post_type('sub_newsletter', $args);
}
add_action('init', 'Chanak_sub_newsletter');

function quote_forms()
{
    $labels = [
        'name' => _x('quote_form', 'Post Type General Name', 'source'),
        'singular_name' => _x(
            'quote_form',
            'Post Type Singular Name',
            'source'
        ),
        'menu_name' => __('quote form', 'source'),
        'name_admin_bar' => __('quote_form', 'source'),
        'archives' => __('Item Archives', 'source'),
        'all_items' => __('All insurance quote form', 'source'),
        'add_new_item' => __('Add New insurance quote form', 'source'),
        'add_new' => __('Add insurance quote form', 'source'),
        'new_item' => __('New insurance quote form', 'source'),
        'edit_item' => __('Edit quote_form', 'source'),
        'update_item' => __('Update quote_form', 'source'),
        'view_item' => __('View quote_form', 'source'),
        'view_items' => __('View quote_form', 'source'),
        'search_items' => __('Search quote_form', 'source'),
        'not_found' => __('Not found', 'source'),
        'not_found_in_trash' => __('Not found in Trash', 'source'),
        'featured_image' => __('Featured Image', 'source'),
        'set_featured_image' => __('Set featured image', 'source'),
        'remove_featured_image' => __('Remove featured image', 'source'),
        'use_featured_image' => __('Use as featured image', 'source'),
        'insert_into_item' => __('Insert into contact', 'source'),
        'uploaded_to_this_item' => __('Uploaded to this item', 'source'),
        'items_list' => __('quote_form list', 'source'),
        'items_list_navigation' => __('quote_form list navigation', 'source'),
        'filter_items_list' => __('Filter quote_form list', 'source'),
    ];
    $capabilities = [
        'create_posts' => false,
        'read_post' => 'read_post',
        'delete_post' => 'delete_post',
        'read_private_posts' => 'read_private_posts',
    ];
    $args = [
        'label' => __('quote form', 'source'),
        'description' => __('quote form Area', 'source'),
        'labels' => $labels,
        'supports' => ['title'],
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 15,
        'menu_icon' => 'dashicons-admin-users',
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => true,
        'publicly_queryable' => false,
        'rewrite' => false,
        'capabilities' => $capabilities,
        'map_meta_cap' => true,
        'capability_type' => 'post',
        'show_in_rest' => false,
    ];
    register_post_type('quote_form', $args);
}
add_action('init', 'quote_forms');
