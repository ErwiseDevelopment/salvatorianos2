<?php

function add_slug_body_class($classes)
{
    global $post;
    if (isset($post)) {
        $classes[] = $post->post_type . '-' . $post->post_name;
    }
    return $classes;
}
add_filter('body_class', 'add_slug_body_class');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');

show_admin_bar(false);

register_nav_menus(array(
    'primary' => 'Menu Primário',
));

function dd($var)
{
    var_dump($var);
    die();
}

function get_file_uri(string $path)
{
    return get_template_directory_uri() . '/' . $path;
}

function get_theme_file(string $path)
{
    return get_template_directory() . '/' . $path;
}

function register_assets(string $handle, string $src, $in_footer = false)
{
    $id = false;

    if (file_exists(get_theme_file('mix-manifest.json'))) {
        $contents = file_get_contents(get_theme_file('mix-manifest.json'));

        $key = '/' . $src;

        if (str_contains($contents, $src)) {
            $manifest = json_decode($contents);
            if (str_contains($manifest->$key, '?id')) {
                $id = explode('?id=', $manifest->$key)[1];
            }
        }
    }

    if (str_contains($src, '.css')) {
        wp_enqueue_style($handle, get_file_uri($src), array(), $id);
    }

    if (str_contains($src, '.js')) {
        wp_enqueue_script($handle, get_file_uri($src), array(), $id, $in_footer);
    }
}

function get_sanitize_string($str)
{
    $str = trim($str);
    $str = str_replace(array('.', '-', '/', ' '), "", $str);

    return $str;
}

function get_limit_words($string, $word_limit)
{
    $words = explode(' ', $string, ($word_limit + 1));
    if (count($words) > $word_limit) {
        array_pop($words);
        array_push($words, "...");
    }
    return implode(' ', $words);
}

function get_months()
{
    return [
        '01' => 'Jan',
        '02' => 'Fev',
        '03' => 'Mar',
        '04' => 'Abr',
        '05' => 'Mai',
        '06' => 'Jun',
        '07' => 'Jul',
        '08' => 'Ago',
        '09' => 'Set',
        '10' => 'Out',
        '11' => 'Nov',
        '12' => 'Dez'
    ];
}

function get_month($month)
{
    return get_months()[$month];
}

function get_editorials(): array
{
    // return [
    //     'institucional' => 'Institucional',
    //     'pe-jordan'     => 'Pe. Jordan',
    //     'vocacional'    => 'Vocacional',
    //     'paroquias'     => 'Paróquias',
    //     'educacao'      => 'Educação',
    //     'obras-sociais' => 'Obras Sociais',
    //     'revistas'      => 'Revista'
    // ];

    return [
        'editoria-educacao' => [
            'categories' => [
                'blog' => 'educacao-blog',
                'news' => 'educacao-noticia',
                'slug' => 'educacao',
            ],
            'colors' => [
                'primary'   => '#000000',
                'secondary' => '#000000'
            ],
            'title' => 'Educação'
        ],
        'editoria-institucional' => [
            'categories' => [
                'blog' => 'institucional-blog',
                'news' => 'institucional-noticia',
                'slug' => 'institucional',
            ],
            'colors' => [
                'primary'   => '#000000',
                'secondary' => '#000000'
            ],
            'title' => 'Institucional'
        ],
        'editoria-obras-sociais' => [
            'categories' => [
                'blog' => 'obras-sociais-blog',
                'news' => 'obras-sociais-noticia',
                'slug' => 'obras-sociais',
            ],
            'colors' => [
                'primary'   => '#000000',
                'secondary' => '#000000'
            ],
            'title' => 'Obras Sociais'
        ],
        'editoria-paroquias' => [
            'categories' => [
                'blog' => 'paroquias-blog',
                'news' => 'paroquias-noticia',
                'slug' => 'paroquias',
            ],
            'colors' => [
                'primary'   => '#000000',
                'secondary' => '#000000'
            ],
            'title' => 'Paróquias'
        ],
        'editoria-pe-jordan' => [
            'categories' => [
                'blog' => 'pe-jordan-blog',
                'news' => 'pe-jordan-noticia',
                'slug' => 'pe-jordan',
            ],
            'colors' => [
                'primary'   => '#000000',
                'secondary' => '#000000'
            ],
            'title' => 'Pe. Jordan'
        ],
        'portal' => [
            'categories' => [
                'blog'          => 'portal-blog',
                'news'          => 'portal-noticia',
                'news_featured' => 'portal-noticia-destaque',
                'slug'          => 'portal',
            ],
            'colors' => [
                'primary'   => '#000000',
                'secondary' => '#000000'
            ],
            'title' => 'Pe. Jordan'
        ],
        'editoria-revistas' => [
            'categories' => [
                'blog' => 'revistas-blog',
                'news' => 'revistas-noticia',
                'slug' => 'revistas',
            ],
            'colors' => [
                'primary'   => '#000000',
                'secondary' => '#000000'
            ],
            'title' => 'Revistas'
        ],
        'editoria-vocacional' => [
            'categories' => [
                'blog' => 'vocacional-blog',
                'news' => 'vocacional-noticia',
                'slug' => 'vocacional',
            ],
            'colors' => [
                'primary'   => '#ffd000',
                'secondary' => '#ffa300'
            ],
            'title' => 'Vocacional'
        ],
    ];
}

function show_banner_title(object $page): bool
{
    if (isset(get_editorials()[$page->post_name]))
        return false;

    return true;
}

function hidden_banner_title(string $type, string $page = null): bool
{
    $pages = [
        'page' => [
            'inicio'        => 'Início',
            'institucional' => 'Institucional',
            'pe-jordan'     => 'Pe. Jordan',
            'vocacional'    => 'Vocacional',
            'paroquias'     => 'Paróquias',
            'educacao'      => 'Educação',
            'obras-sociais' => 'Obras Sociais',
            'revistas'      => 'Revista'
        ]
    ];

    if ($type == 'post') {
        return true;
    }

    if ($type == 'page') {
        if (isset($pages[$type][$page])) {
            return false;
        }
    }

    return true;
}

function get_custom_query(int $posts_per_page = -1, string $post_type = 'post', string $cat_name = '', string $order = 'DESC', array $post__not_in = [])
{
    if ($cat_name != '') {
        return [
            'posts_per_page' => $posts_per_page,
            'post_type'      => $post_type,
            'cat_name'       => $cat_name,
            'order'          => $order,
            'post__not_in'   => $post__not_in
        ];
    }

    return [
        'posts_per_page' => $posts_per_page,
        'post_type'      => $post_type,
        'order'          => $order,
        'post__not_in'   => $post__not_in
    ];
}

function get_thumbnail_custom(string $classe = '', string $height = '')
{
    $alt = get_the_title() . ' - Salvatorianos';

    return the_post_thumbnail('post-thumbnail', array(
        'class' => $classe,
        'style' => $height != '' ? $height . 'px' : '',
        'alt'   => $alt
    ));
}

function get_general_custom_post(string $post_type, string $editorial)
{
    return $args = array(
        'posts_per_page' => -1,
        'post_type'      => $post_type,
        'tax_query'      => array(
            array(
                'taxonomy' => 'editoria',
                'field'    => 'slug',
                'terms'    => array($editorial)
            )
        )
    );
}

function get_general_posts_editorial_attributes(string $title, string $category_slug, string $button_title, string $button_link): array
{
    return [
        'title'         => $title,
        'category_slug' => $category_slug,
        'button_title'  => $button_title,
        'button_link'   => $button_link
    ];
}

function get_posts_attributes(object $posts_editorial): array
{
    $category_main = '';

    foreach (get_the_category(get_the_ID()) as $category) {
        foreach (get_editorials() as $editorial) {
            if ($category->name == $editorial) {
                $category_main = $category->name;
            }
        }
    }

    $thumbnail = get_the_post_thumbnail(null, 'post-thumbnail', array('class' => 'w-full h-[220px] object-cover', 'alt' => get_the_title()));

    return [
        'title'          => get_the_title(),
        'category'       => $category_main,
        'date_published' => get_the_date('d/m/Y'),
        'content'        => get_the_content(),
        'excerpt'        => get_the_excerpt(),
        'thumbnail'      => $thumbnail,
        'link'           => get_the_permalink()
    ];
}

/**
 * Enqueue scripts and styles.
 */
function theme_dev_scripts()
{
    wp_enqueue_style('theme-dev-style', get_stylesheet_uri());

    register_assets('theme-dev-fonts-style', 'public/fonts/fonts.css');
    register_assets('theme-dev-app-style', 'public/css/app.css');
    register_assets('theme-dev-app-scripts', 'public/js/app.js', true);

    wp_enqueue_style('theme-dev-custom-style', get_template_directory_uri() . '/custom.css', array(), '1.0.0');
    wp_enqueue_script('theme-dev-custom-scripts', get_template_directory_uri() . '/custom.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'theme_dev_scripts');

require get_template_directory() . '/inc/functions/register-post-types.php';
require get_template_directory() . '/inc/functions/register-rest-fields.php';
require get_template_directory() . '/inc/functions/register-options-page.php';
