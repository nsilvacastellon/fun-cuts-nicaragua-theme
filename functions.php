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
   add_theme_support('post-thumbnails');
   /*set_post_thumbnail_size( 300, 300, true);*/ /* To implement it: the_post_thumbnail('thumbnail')*/
   add_image_size( 'index-post-thumbnail', 300, 300, true ); // 300 pixels wide by 300 pixels tall, soft proportional crop mode
   add_image_size( 'author-post-thumbnail', 150, 150, true ); // 200 pixels wide by 200 pixels tall, hard crop mode
}

add_action('after_setup_theme', 'fun_cuts_features');


/* Changing the order of the comments form fields  */
//Comment Field Order
add_filter( 'comment_form_fields', 'mo_comment_fields_custom_order' );
function mo_comment_fields_custom_order( $fields ) {
    $comment_field = $fields['comment'];
    $author_field = $fields['author'];
    $email_field = $fields['email'];
    $url_field = $fields['url'];
    $cookies_field = $fields['cookies'];
    unset( $fields['comment'] );
    unset( $fields['author'] );
    unset( $fields['email'] );
    unset( $fields['url'] );
    unset( $fields['cookies'] );
    // the order of fields is the order below, change it as needed:
    $fields['author'] = $author_field;
    $fields['email'] = $email_field;
    $fields['url'] = $url_field;
    $fields['comment'] = $comment_field;
    $fields['cookies'] = $cookies_field;
    // done ordering, now return the fields:
    return $fields;
}






?>