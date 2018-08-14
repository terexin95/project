<?php

add_theme_support( 'custom-logo' );

// Load up our awesome theme options
require_once ( get_stylesheet_directory() . '/theme-options.php' );

function theme_terexin_style() {
	wp_enqueue_style( 'style-name', get_stylesheet_uri() );
	wp_enqueue_style( 'main', get_template_directory_uri() . '/css/main.min.css');
	wp_enqueue_style( 'slick-theme', get_template_directory_uri() . '/css/slick-theme.css');
	wp_enqueue_style( 'slick', get_template_directory_uri() . '/css/slick.css');
}
add_action( 'wp_enqueue_scripts', 'theme_terexin_style' );



// правильный способ подключить стили и скрипты темы
add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );
function theme_name_scripts() {


	// подключаем js файл темы
	wp_enqueue_script( 'script-name', get_template_directory_uri() .'/js/scripts.min.js', array(), '1.0', true );
	wp_enqueue_script( 'PageScroll2id', get_template_directory_uri() .'/js/jquery.malihu.PageScroll2id.js', array(), '1.0', true );
}


add_theme_support( 'post-thumbnails' );