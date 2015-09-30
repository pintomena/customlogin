<?php
/*
Plugin Name: Customlogin
Version: 1.0
Description: Customize login page
Author: Pinto
Author URI: http://bitado.com
Plugin URI: http://bitado.com
Text Domain: customlogin
Domain Path: /languages
*/


/*
 *  Personalizamos el logo en la página de login
 */
add_action('login_head', 'customlogin_my_logo');
function customlogin_my_logo() {
	
    echo '<style type="text/css">
    .login h1 a { background-image:url(' . plugins_url( '/img/my-logo.png', __FILE__ ) . ') !important; 
	background-size: 272px 84px !important;
	height: 84px !important; 
	width: 272px !important; 
	margin-bottom: 0 !important; 
	margin-bottom: 10px;
	padding-bottom: 0 !important; }

    </style>';
}


/*
 *  Personalizamos la url del logo en la página de login
 *  Ponemos la url de nuestro blog
 */
add_filter('login_headerurl', 'customlogin_url_logo');
function customlogin_url_logo(){
	
    return get_bloginfo( 'wpurl' );
}


/*
 *  Personalizamos el texto sobreimpreso al pasar el raton
 *  por encima del logo
 */
add_filter('login_headertitle', 'customlogin_hover_text_logo');
function customlogin_hover_text_logo(){
	
    return 'Mi texto personalizado';
}
