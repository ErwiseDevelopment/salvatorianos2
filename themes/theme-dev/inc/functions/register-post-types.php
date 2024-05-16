<?php
// https://generatewp.com
function products_init()
{
    $args = array(
        'public'             => true,
        'label'              => 'Produtos',
        'publicly_queryable' => true,
        'show_ui'            => true,
        'query_var'          => true,
        'show_in_rest'       => true,
        'menu_icon'          => 'dashicons-admin-users',
        'capability_type'    => 'post',
        'hierarchical'       => false,
        'supports'           => array('title', 'thumbnail')
    );
    register_post_type('product', $args);
}

add_action('init', 'products_init');

// function create_produtos_taxonomies()
// {

//     $args = array(
//         'hierarchical'      => true,
//         'labels'            => array('name' => 'Marcas'),
//         'show_ui'           => true,
//         'show_admin_column' => true,
//         'query_var'         => true,
//         'show_in_rest' => true,
//         'rest_base'          => 'marcas_categories',
//         'rest_controller_class' => 'WP_REST_Terms_Controller',
//         'rewrite'           => array('slug' => 'marcas_categories'),
//         'default_term' => 'gore'
//     );

//     register_taxonomy('marcas_categories', array('produtos'), $args);
// }
// add_action('init', 'create_produtos_taxonomies', 0);
