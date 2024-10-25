<?php 

function clinic_theme_support(){
     add_theme_support('post-thumbnails');

     // automatic-feed-link
     add_theme_support('automatic-feed-links');

     // html support 
     add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );

     // title 
     add_theme_support( 'title-tag' );

     add_theme_support('customize-selection-refresh-widgets');

     // post formate
     add_theme_support('post-formates', array(
          'image',
          'video',
          'audio',
          'gallery',
          'quote'
     ));
}

add_action( 'after_setup_theme', 'clinic_theme_support' );

include_once('inc/common/scripts.php');
include_once('inc/template-function.php');

if(class_exists('Kirki')){
     include_once('inc/clinic-kirki.php');
}