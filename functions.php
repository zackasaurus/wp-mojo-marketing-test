<?php

function load_stylesheets()
{
    wp_register_style('index', get_template_directory_uri() . 'css/index.css', array(), 1, 'all');
    wp_enqueue_style('index');
    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Quicksand:300,400,500,600,700&display=swap');
}

add_action('wp_enqueue_scripts', 'load_stylesheets');
