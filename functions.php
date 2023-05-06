<?php
  // CSSの読み込み
  function my_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css',array(), false, 'all' );
    wp_enqueue_style( 'child-style',
      get_stylesheet_directory_uri() . '/style.css',array(), false, 'all'
    );
  }
  add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

// JavaScriptの読み込み
  function my_scripts() {
    wp_enqueue_script( 'my-script', get_template_directory_uri() . '/script.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'my_scripts' );

// 外部データの読み込み
function load_external_files() {
  wp_enqueue_script( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array('jquery'), '3.3.7', true );
}
add_action( 'wp_enqueue_scripts', 'load_external_files' );

  

  // アイキャッチ表示
  function setup_theme() {
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'setup_theme');

