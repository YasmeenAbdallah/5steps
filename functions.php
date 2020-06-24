<?php
/*
 function to add my styles sheets

*/
function add_styles(){
     //UIkit CSS 
    wp_enqueue_style( 'uikitCSS','//cdn.jsdelivr.net/npm/uikit@3.5.3/dist/css/uikit.min.css' );
    //fontawesome css
    wp_enqueue_style( 'fontawesome css', '//use.fontawesome.com/releases/v5.8.1/css/all.css');
     //my main css file 
    wp_enqueue_style( 'css',get_template_directory_uri().'/des/style.css');
}
/*
 function to add my scripts sheets

*/
function add_script(){

    //UIkit js 
    wp_enqueue_script( 'uikit-js', '//cdn.jsdelivr.net/npm/uikit@3.5.3/dist/js/uikit.min.js', array( 'jquery' ), false, false  );
    wp_enqueue_script( 'uikit-JS ','//cdn.jsdelivr.net/npm/uikit@3.5.3/dist/js/uikit-icons.min.js',array() , false ,false);

}


//function for my theme features that i want to add
function FiveSteps_featuers(){
//To enable Custom Headers 
add_theme_support( 'custom-header',$args );

//add featured image support
add_theme_support( 'post-thumbnails' );
//add title-tag support
add_theme_support( 'title-tag');
//enable the use of a custom logo 
$defaults = array(
 'height'      => 50,
 'width'       => 200,
 'header-text' => array( 'site-title', 'site-description' ),
 );
 add_theme_support( 'custom-logo', $defaults );
}


/*
add custom menu support
Registers a navigation menu location for a theme.
*/ 
function register_custom_menu(){
    register_nav_menu('uikitPrimary-menu',__('primary nav-bar'));
     register_nav_menu('footer-menu1',__('footer location one'));
      register_nav_menu('footer-menu2',__('footer location two'));
}
/* function to control the primary nav  */
function Primary_nav_menu(){
    wp_nav_menu(array(
        'theme_location'  =>'uikitPrimary-menu',
        'menu_class'      =>'uk-navbar-nav',
        'menu_id'         =>'right_menu',
        'container'       => 'div',
        'depth'          => 0
    ));
}
/* function to control the footer menu 1  */
function footer_location_2(){
    wp_nav_menu(array(
        'theme_location'  =>'footer-menu2',
        
    ));
}
/* function to control the footer menu 2  */
function footer_location_1(){
    wp_nav_menu(array(
        'theme_location'  =>'footer-menu1',
        
    ));
}
// for flexible custom header
$args = array(
    'flex-width'    => true,
    'width'         => 980,
    'flex-height'   => true,
    'height'        => 200,
    'default-image' => get_template_directory_uri() . '/images/header.jpg',
);



/* 
** start th acf blocks
*/
 
// check function exists.
 if( function_exists('acf_register_block_type') ) {
//add th acf action
add_action('acf/init', 'my_register_blocks');
    }
function my_register_blocks() {
        // register a testimonial block.
        acf_register_block_type(array(
            'name'                => 'Hero',
            'title'                => __('Hero'),
            'description'        => __('A custom Hero block.'),
            'render_callback'    => 'section_block_callback',
            'category'            => 'formatting',
            'icon'                => 'admin-comments',
            'keywords'            => array('hero'),
            /*'render_tempaltes'
            enqueue_style
            */
           
        ));
    }



/*
add_action() finction
responsinle for putting the scripts file in the main page
*/

add_action( 'wp_enqueue_scripts','add_styles');
add_action('wp_enqueue_scripts','add_script');

//add_action for menu
 
add_action('init','register_custom_menu');
//add action for my theme featuers
add_action('after_setup_theme','FiveSteps_featuers')


?>