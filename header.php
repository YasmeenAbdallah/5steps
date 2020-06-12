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
<nav class="section__type-nav" uk-navbar>
<!-- START .uk-navbar-left -->
<div class="uk-navbar-left">
   <img src="http://localhost:8000/wp-content/uploads/2020/06/fivesteps.png"  width="50%" />
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
