<?php

function add_theme_scripts()
{
    wp_enqueue_script('bootstrap-script', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js', array('jquery'), '3.4.0', true);
    wp_enqueue_script('animation-script', get_template_directory_uri() . '/js/animation.js', array('jquery'), '1.0.0', true);
    wp_enqueue_style('bootstrap-style', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css', array(), '3.4.0', 'all');
    wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'add_theme_scripts');

function register_theme_menu()
{
    $args = array(
        'header-menu' => 'Header Menu'
    );

    register_nav_menus($args);
}

add_action('init', 'register_theme_menu');

function change_theme_menu_html($menu)
{
    $menu = strip_tags($menu, '<a>');
    return preg_replace('/<a /', '<a class="navbar-brand" ', $menu);
}