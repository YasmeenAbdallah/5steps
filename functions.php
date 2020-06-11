<?php
/*
 function to add my styles sheets

*/
function add_styles(){
    
    wp_register_style( 'uikit link', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css' );
    wp_enqueue_style( 'uikit css', 'uikit link');
}
?>