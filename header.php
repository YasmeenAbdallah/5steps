<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name ="viewport" content="width= device-width , intial-scale=1" >
    <!--get the ttile from bloginfo-->
    <title><?php bloginfo('name');?></title> 
    <!--Pings back the links found in a post.-->
    <link rel="pingback" href="<?php  bloginfo('pingback_url');?>"/>
    <?php wp_head(); ?>
</head>
<!-- it give us the info about the current screen-->
<body <?php body_class(  )?>>
   
   
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
    <!-- if i want to amke my own nav with check the page and it's childs to make the link on
    <li <?php// if(is_page( 'about-us' )or wp_get_post_parent_id( 0 )==137) echo 'class="current-menu-item"'?>>
    <a href="<?php //echo site_url( 'http://localhost:8000/?page_id=137' )?>">About Us</a></li>-->
    <?php
    Primary_nav_menu();?>
       
            </ul>   
</div>
<!-- END .uk-navbar-right -->
</nav>  
<!-- END .section__type-nav -->


