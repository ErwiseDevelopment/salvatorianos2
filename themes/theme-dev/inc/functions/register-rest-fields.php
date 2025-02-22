<?php

add_filter('rest_post_query', function ($args, $request) {
    if ($request['cat_relation'] == 'AND') {
        $args['category__and'] = $request['categories'];
    }
    return $args;
}, 10, 2);

function post_featured_image_json($data, $post, $context)
{
    $featured_image_id = $data->data['featured_media']; // get featured image id
    $featured_image_url = wp_get_attachment_image_src($featured_image_id, 'original'); // get url of the original size

    if ($featured_image_url) {
        $data->data['featured_image_src'] = $featured_image_url[0];
    }

    return $data;
}
add_filter('rest_prepare_post', 'post_featured_image_json', 10, 3);

function collection_params(array $query_params, \WP_Post_Type $post_type): array
{
    $query_params['post__not_in'] = [
        'description' => 'Excludes posts.',
        'type'        => 'array',
        'default'     => [],
    ];

    return $query_params;
}
add_filter('rest_post_collection_params', 'collection_params', null, 2);

function query($args, \WP_REST_Request $request)
{
    if (isset($request['post__not_in']) && count($request['post__not_in'])) {
        $args['post__not_in'] = $request['post__not_in'];
    }
    return $args;
}
add_filter('rest_post_query', 'query', null, 2);

add_action("rest_api_init", function () {
    register_rest_route("options", "/all", [
        "methods" => "GET",
        "callback" => "acf_options_route",
    ]);
});

function acf_options_route()
{
    return get_fields('options');
}

function register_featured_api_field()
{
    register_rest_field(
        'galeria',
        'editoria',
        array(
            'get_callback' => 'get_category_api_field',
            'schema' => null,
        )
    );
}
