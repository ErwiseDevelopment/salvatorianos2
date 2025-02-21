<?php
function scalabrinianos_create_post_type()
{
    register_post_type('agendas', array(
        'labels'         => array('name' => 'Agenda', 'singular_name' => 'Agenda', 'all_items' => 'Todos'),
        'public'         => true,
        'has_archive'    => true,
        'menu_icon'        => 'dashicons-welcome-write-blog',
        'supports'         => array('title', 'editor',  'revisions', 'author', 'thumbnail')
    ));

    register_post_type('Escolas', array(
        'labels'         => array('name' => 'Escolas', 'singular_name' => 'Escolas', 'all_items' => 'Todos'),
        'public'         => true,
        'has_archive'     => true,
        'menu_icon'     => 'dashicons-calendar-alt',
        'supports'         => array('title', 'editor',  'revisions', 'author')
    ));

    register_post_type('materiais', array(
        'labels'         => array('name' => 'Materiais', 'singular_name' => 'Materiais', 'all_items' => 'Todos'),
        'public'         => true,
        'has_archive'     => true,
        'menu_icon'     => 'dashicons-book',
        'supports'         => array('title',  'author', 'thumbnail')
    ));

    register_post_type('banners', array(
        'labels'         => array('name' => 'Banners', 'singular_name' => 'Banners', 'all_items' => 'Todos'),
        'public'         => true,
        'has_archive'     => true,
        'menu_icon'     => 'dashicons-book',
        'supports'         => array('title',  'author', 'thumbnail')
    ));

    register_post_type('comunidade', array(
        'labels'         => array('name' => 'Comunidades', 'singular_name' => 'Comunidade', 'all_items' => 'Todas'),
        'public'         => true,
        'has_archive'    => true,
        'menu_icon'      => 'dashicons-admin-home',
        'supports'       => array('title',  'author')
    ));

    register_post_type('videos', array(
        'labels'         => array('name' => 'Videos', 'singular_name' => 'Videos', 'all_items' => 'Todos'),
        'public'         => true,
        'has_archive'     => true,
        'menu_icon'     => 'dashicons-book',
        'supports'         => array('title',  'author', 'thumbnail')
    ));

    register_post_type('acervo', array(
        'labels'         => array('name' => 'Acervo', 'singular_name' => 'Acervo', 'all_items' => 'Todos'),
        'public'         => true,
        'has_archive'     => true,
        'menu_icon'     => 'dashicons-book',
        'supports'         => array('title',  'author', 'thumbnail')
    ));


    register_post_type('conselho', array(
        'labels'         => array('name' => 'Conselho', 'singular_name' => 'Conselho', 'all_items' => 'Todos'),
        'public'         => true,
        'has_archive'     => true,
        'menu_icon'     => 'dashicons-book',
        'supports'         => array('title',  'author', 'thumbnail')
    ));
    register_post_type('equipe', array(
        'labels'         => array('name' => 'Equipes', 'singular_name' => 'Equipes', 'all_items' => 'Todos'),
        'public'         => true,
        'has_archive'     => true,
        'menu_icon'     => 'dashicons-book',
        'supports'         => array('title',  'author', 'thumbnail')
    ));

    register_post_type('galeria', array(
        'labels'         => array('name' => 'Galeria', 'singular_name' => 'Galeria', 'all_items' => 'Todos'),
        'public'         => true,
        'has_archive'     => true,
        'menu_icon'     => 'dashicons-book',
        'supports'         => array('title',  'author')
    ));

    register_post_type('local', array(
        'labels'        => array('name' => 'Onde Estamos', 'singular_name' => 'Onde Estamos', 'all_items' => 'Todos'),
        'public'        => true,
        'has_archive'   => true,
        'menu_icon'     => 'dashicons-book',
        'supports'      => array('title',  'author', 'thumbnail')
    ));

    register_post_type('comunidade-religiosa', array(
        'labels'        => array('name' => 'Comunidades Religiosas ', 'singular_name' => 'Comunidade Religiosa', 'all_items' => 'Todos'),
        'public'        => true,
        'has_archive'   => true,
        'menu_icon'     => 'dashicons-book',
        'supports'      => array('title',  'author', 'thumbnail')
    ));
}
add_action('init', 'scalabrinianos_create_post_type');

//Criar taxonomia:

function scalabrinianos_create_taxonomy()
{
    // Registrar a taxonomia 'editoria' para todos os tipos de post
    $post_types = array('agendas', 'locais', 'materiais', 'banners', 'videos',  'galeria');

    register_taxonomy('editoria', $post_types, array(
        'labels'             => array(
            'name'              => 'Editorias',
            'singular_name'     => 'Editorias'
        ),
        'hierarchical'       => true,
        'show_admin_column'  => true,
    ));

    register_taxonomy('localizacao', 'local', array(
        'labels'             => array(
            'name'           => 'Localizações',
            'singular_name'  => 'Localização'
        ),
        'hierarchical'       => true,
        'show_admin_column'  => true,
    ));
}
add_action('init', 'scalabrinianos_create_taxonomy');
