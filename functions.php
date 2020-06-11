<?php
/*
 function to add my styles sheets

*/
function add_styles(){
     //UIkit CSS 
    wp_register_style( 'uikitLink', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css' );
    wp_enqueue_style( 'uikitCSS', 'uikitLink');
    //fontawesome css
    wp_register_style( 'fontawesome', 'https://use.fontawesome.com/releases/v5.8.1/css/all.css' );
    wp_enqueue_style( 'fontawesome css', 'fontawesome');
}
/*
 function to add my styles sheets

*/
function add_scripts(){
    //UIkit js 
    wp_register_script( 'uikitJ', 'https://cdn.jsdelivr.net/npm/uikit@3.3.0/dist/js/uikit.min.js' );
    wp_register_script( 'uikitJS ', 'uikitJ',array(),false,true);
    //UIkit Icons
    wp_register_script( 'uikitI', 'https://cdn.jsdelivr.net/npm/uikit@3.3.0/dist/js/uikit-icons.min.js' );
    wp_register_script( 'uikitIcons', 'uikitI',array(),false,true);
}
?>