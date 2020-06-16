<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset="<?php bloginfo('charset');?>">
    <!--get the ttile from bloginfo-->
    <title><?php bloginfo('name');?></title> 
    <!--Pings back the links found in a post.-->
    <link rel="pingback" href="<?php  bloginfo('pingback_url');?>"/>
    <?php wp_head(); ?>
</head>
<body>
   
   
</head>


<!-- START section__type-nav -->
<nav class="section__type-nav uk-container" uk-navbar>
<!-- START .uk-navbar-left -->
<div class="uk-navbar-left">
    <?php
if ( has_custom_logo() ) {
        the_custom_logo() ;
} else {
        echo '<h1>'. get_bloginfo( 'name' ) .'</h1>';
}
?>
</div>
<!-- END .uk-navbar-left -->
<!-- START .uk-navbar-right -->
<div class="uk-navbar-right">
<ul class="uk-navbar-nav " id='right_menu'>
    
    <li><?php
    Primary_nav_menu();?></li>
       
            </ul>
    
    
</div>
<!-- END .uk-navbar-right -->
</nav>
<!-- END .section__type-nav -->
