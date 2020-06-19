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

/*
add custom menu support
Registers a navigation menu location for a theme.
*/ 
function register_custom_menu(){
    register_nav_menu('uikitPrimary-menu',__('primary nav-bar'));
}
/* function to control the nav  */
function Primary_nav_menu(){
    wp_nav_menu(array(
        'theme_location'  =>'uikitPrimary-menu',
        'menu_class'      =>'uk-navbar-nav',
        'menu_id'         =>'right_menu',
        'container'       => 'div',
        'depth'          => 0
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
//To enable Custom Headers 
add_theme_support( 'custom-header',$args );

//add featured image support
add_theme_support( 'post-thumbnails' );
//enable the use of a custom logo 
function themename_custom_logo_setup() {
 $defaults = array(
 'height'      => 50,
 'width'       => 200,
 'header-text' => array( 'site-title', 'site-description' ),
 );
 add_theme_support( 'custom-logo', $defaults );
}
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
function my_acf_init()
{
    // check function exists
        // register hero block
        acf_register_block_type(array(
            'name'                => 'hero',
            'title'               => __('hero'),
            'description'         => __('the hero section.'),
            //'render_callback'     => 'section_block_callback',
            'category'            => 'hero',
            //to make it more searchable
            'keywords'            => array('hero','home'),
        ));
    }



function my_acf_add_local_field_groups() {
	
	acf_add_local_field_group(array(
		'key' => 'group_1',
		'title' => 'My Group',
		'fields' => array (
			array (
				'key' => 'field_1',
				'label' => 'Sub Title',
				'name' => 'sub_title',
				'type' => 'text',
			)
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'post',
				),
			),
		),
	));
	
}*/



/*
add_action() finction
responsinle for putting the scripts file in the main page
*/

add_action( 'wp_enqueue_scripts','add_styles');
add_action('wp_enqueue_scripts','add_script');

//add_action for menu
 
add_action('init','register_custom_menu');
// add_action for logo
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );


?>