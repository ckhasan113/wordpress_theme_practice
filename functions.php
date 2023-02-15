<?php
// My Theme Function

/*=========================
* Theme Title
* Thumbnail Image Area
* Excerpt to 40 Word
* Pagenav Function
==========================*/
include_once('inc/default.php');


// Enqueueing File
/*================================
* Theme CSS and jQuery File calling
    Style
    jQuery

* Google fonts
==================================*/
include_once('inc/enqueue.php');


// Theme Function
/*==============================
* Header Area Function
* Menu Position Option
* Footer Option
===============================*/
include_once('inc/theme_function.php');


// Menu register
/*=====================================
* Main menu register
* Walker Menu Properties
======================================*/
include_once('inc/menu_register.php');


// Widgets register
/*===================================
* Sidebar Register Function
    Main sidebar
    Footer sidebar 
====================================*/
include_once('inc/widgets_register.php');


// Custom Post
/*===================================
* Adding Custom Post
    Service Post
====================================*/
include_once('inc/custom_post.php');


// Short Code
/*===================================
* Create short code
    Shortcode
    Button Shortcode
    Shortcode & custom post
====================================*/
include_once('inc/shortcode.php');
