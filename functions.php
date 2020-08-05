<?php

const theme_name = 'leonidlezner';

function get_logo_image_link($name = 'logo')
{
    $extensions = ['svg', 'png', 'jpeg', 'jpg'];

    foreach ($extensions as $ext) {
        $file = 'brand/' . $name . $ext;

        if (file_exists(get_template_directory() . '/dist/assets/' . $file)) {
            break;
        }
    }

    $version = filemtime(get_template_directory() . '/dist/assets/' . $file);

    $url = get_assets_url() . $file . '?v=' . $version;

    echo $url;
}

function enqueue_style($css_file, $name)
{
    $version = filemtime(get_template_directory() . $css_file);
    wp_enqueue_style($name, get_template_directory_uri() . $css_file, array(), $version);
}

function theme_scripts()
{
    $css_file = '/dist/css/styles.css';
    $version = filemtime(get_template_directory() . $css_file);
    wp_enqueue_style('leonidlezner-styles', get_template_directory_uri() . $css_file, array(), $version);

    //enqueue_style('/dist/assets/fontawesome/web-fonts-with-css/css/fontawesome-all.css', 'leonidlezner-font-awesome');

    $js_file = '/dist/js/main.min.js';
    $version = filemtime(get_template_directory() . $js_file);
    wp_enqueue_script('script-leonidlezner', get_template_directory_uri() . $js_file, '', $version);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

function get_assets_url()
{
    return get_template_directory_uri() . '/dist/assets/';
}

function get_image_url($image)
{
    $image_file = '/dist/assets/images/' . $image;
    $version = filemtime(get_template_directory() . $image_file);
    return get_assets_url() . '/images/' . $image . '?v=' . $version;
}

function get_fonts_url($font_name)
{
    return get_assets_url() . 'fonts/' . $font_name;
}

function assets_url()
{
    echo get_assets_url();
}

function theme_setup()
{
    load_theme_textdomain(theme_name, get_template_directory() . '/languages');

    register_nav_menu('main-menu', __('Main Menu', theme_name));
    register_nav_menu('aux-menu', __('Aux Menu', theme_name));

    add_theme_support('title-tag');

    add_theme_support('html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
    ));

    add_theme_support('automatic-feed-links');
}

function inspect_v($var)
{
    echo '<pre>' . print_r($var, true) . '</pre>';
}

function additional_admin_color_schemes()
{
    $version = filemtime(get_template_directory() . '/dist/css/admin.css');

    wp_admin_css_color(
        'leonidlezner',
        __('Leonid Lezner', theme_name),
        get_template_directory_uri() . '/dist/css/admin.css?v=' . $version,
        array('#171717', '#FACA13', '#444444', '#FFFFFF'),
        array( 'base' => '#171717', 'focus' => '#fff', 'current' => '#fff' )
    );
}

function tag_list()
{
    $posttags = get_the_tags();

    if ($posttags) {
        echo '<ul class="list-inline tag-list-inline">';

        foreach ($posttags as $tag) {
            echo '<li class="list-inline-item small">' . $tag->name . '</li>';
        }

        echo '</ul>';
    }
}


add_action('wp_enqueue_scripts', 'theme_scripts');
add_action('admin_init', 'additional_admin_color_schemes');
add_action('after_setup_theme', 'theme_setup');