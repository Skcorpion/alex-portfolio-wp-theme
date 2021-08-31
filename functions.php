<?php

  add_action( 'wp_enqueue_scripts', 'alex_style' );

  function alex_style() {
    // Плагіни через окремий метод get_template_directory_uri()
    wp_enqueue_style( 'normalize-style', get_template_directory_uri() . '/assets/css/normalize.css');
    wp_enqueue_style( 'fullpage-style', get_template_directory_uri() . '/assets/css/full-page-scroll.css');
    // Основні стилі
    wp_enqueue_style( 'main-style', get_stylesheet_uri() );
  }

  add_action( 'wp_enqueue_scripts', 'alex_scripts' );

  function alex_scripts() {
    // Замінюємо стандартний jquery в wp на наш
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js');
    wp_enqueue_script( 'jquery' );
    // array(jquery) - залежить від jquery, null - без версії, true - підключити перед </body>
    wp_enqueue_script( 'fullpage', get_template_directory_uri() . '/assets/js/full-page-scroll.js');
    wp_enqueue_script( 'main-script', get_template_directory_uri() . '/assets/js/main.js', ['jquery', 'fullpage'], null, true);
  }