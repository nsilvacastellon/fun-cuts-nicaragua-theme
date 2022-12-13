<?php

function fun_cuts_files() {
   // Loading css stylesheet
   wp_enqueue_style('fun_cuts_stylesheet', get_stylesheet_uri());
   // Loading google fonts
   wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Oswald:wght@400;500;600;700&display=swap');
   // Loading font awesome icons as scripts
   wp_enqueue_script('font-awesome-icons', 'https://kit.fontawesome.com/41227e39f8.js', NULL, '1.0', true);
   // Loading javascript files
   wp_enqueue_script('fun_cuts_main_javascript', get_theme_file_uri('/fun-cuts.js'), NULL, '1.0', true);
}

add_action('wp_enqueue_scripts', 'fun_cuts_files');

function fun_cuts_features() {
   add_theme_support('title-tag');
}

add_action('after_setup_theme', 'fun_cuts_features');










?>