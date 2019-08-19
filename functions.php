<?php

function load_stylesheets()
{
    wp_register_style('index', get_template_directory_uri() . '/index.css', array(), 1, 'all');
    wp_enqueue_style('index');
    wp_enqueue_style('Quicksand', '//fonts.googleapis.com/css?family=Quicksand:300,400,500,600,700&display=swap');
    wp_enqueue_style('Roboto', '//fonts.googleapis.com/css?family=Roboto:300,400,500,600,700&display=swap');
    // wp_enqueue_style('Merriweather300', '//fonts.googleapis.com/css?family=Merriweather:300&display=swap');
    // wp_enqueue_style('Merriweather500', '//fonts.googleapis.com/css?family=Merriweather:500&display=swap');
}
function addjs()
{
    wp_register_script('index', get_template_directory_uri() . '/js/index.js', array(), 1, 1, 1);
    wp_enqueue_script('index');
}

add_action('wp_enqueue_scripts', 'load_stylesheets');
add_action('wp_enqueue_scripts', 'addjs');
