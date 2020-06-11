<?php
/*
 function to add my styles sheets

*/
function add_styles(){
     //UIkit CSS 
    wp_enqueue_style( 'uikitCSS','//cdn.jsdelivr.net/npm/uikit@3.5.3/dist/css/uikit.min.css' );
    //fontawesome css
    
    wp_enqueue_style( 'fontawesome css', '//use.fontawesome.com/releases/v5.8.1/css/all.css');
}
/*
 function to add my scripts sheets

*/
function add_script(){

    //UIkit js 
    wp_enqueue_script( 'uikit-js', '//cdn.jsdelivr.net/npm/uikit@3.5.3/dist/js/uikit.min.js', array( 'jquery' ), false, false  );
    wp_enqueue_script( 'uikit-JS ','//cdn.jsdelivr.net/npm/uikit@3.5.3/dist/js/uikit-icons.min.js',array() , false ,false);

}

/*
add_action() finction
responsinle for putting the scripts file in the main page
*/

add_action( 'wp_enqueue_scripts','add_styles');
add_action('wp_enqueue_scripts','add_script');

?>