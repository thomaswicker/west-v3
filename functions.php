<?php


// BEGIN - Load jQuery for thomaswicker.com

if ( !is_admin() ) {
   wp_deregister_script('jquery');
    wp_register_script( 'jqueryJS', get_template_directory_uri() . '/js/jquery-1.11.1.min.js',array('jquery') );
    wp_enqueue_script('jqueryJS');
}

// END - Load jQuery for west-inc.com

// BEGIN LOAD THEME CSS
function theme_styles() {
    wp_enqueue_style( 'main1', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'main', get_template_directory_uri() . '/css/application.min.css' );
}

add_action( 'wp_enqueue_scripts', 'theme_styles' );

// END LOAD THEME CSS


// BEGIN - LOAD THEME JS

add_action( 'wp_enqueue_scripts', 'theme_js' );

function theme_js() {

    wp_register_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js',array('jquery') );
    wp_register_script( 'isotope', get_template_directory_uri() . '/js/jquery.isotope.js',array('jquery') );
    wp_register_script( 'mainjs', get_template_directory_uri() . '/js/application.min.js',array('jquery') );

    wp_enqueue_script( 'bootstrap' );
    wp_enqueue_script( 'isotope' );
    wp_enqueue_script( 'mainjs' );
}

// END - LOAD THEME JS



// BEGIN - Custom FadeIn for Login page

    add_action( 'login_head', 'untame_fadein',30);

    function untame_fadein() {
    echo '<script type="text/javascript">// <![CDATA[
    jQuery(document).ready(function() { jQuery("#loginform,#nav,#backtoblog, #login").css("display", "none"); jQuery("#loginform,#nav,#backtoblog, #login").fadeIn(1500);
    });
    // ]]></script>';
    }
// END - Custom FadeIn for Login page



// BEGIN - Load the Custom Login Theme JS
    add_action('login_head', 'custom_login_css');

    function custom_login_css() {
        echo '<link rel="stylesheet" type="text/css" href="'.get_stylesheet_directory_uri().'/css/custom-login.css" />';
    }
// Load custom URL for the new logo
    add_filter( 'login_headerurl', 'custom_login_header_url' );
        function custom_login_header_url($url) {
        return 'http://www.west-inc.com/';
    }
// END - Load the Custom Login Theme JS



// BEGIN CUSTOM ADMIN DASHBOARD HEADER LOGO
function custom_admin_logo() {
    echo '
        <style type="text/css">
            #header-logo { background-image: url('.get_bloginfo('stylesheet_directory').'/images/login_logo.png) !important; }
        </style>
    ';
}
add_action('admin_head', 'custom_admin_logo');
// END CUSTOM ADMIN DASHBOARD HEADER LOGO



// BEGIN EDIT FOOTER TEXT
 function remove_footer_admin () {
    echo '<span id="footer-thankyou">Site by <a href="http://www.xiri.io" target="_blank">XIRI Media, LLC</a></span>';
}
add_filter('admin_footer_text', 'remove_footer_admin');
// END EDIT FOOTER TEXT



/* BEGIN ENABLE CUSTOM MENUS */

add_theme_support( 'menus' );

// Function for creating Widgets
function create_widget($name, $id, $description) {
  register_sidebar(array(
      'name' => __( $name ),
      'id' => $id,
      'description' => __( $description ),
      'before_widget' => ' ',
      'after_widget' => ' ',
      'before_title' => '<h5>',
      'after_title' => '</h5>'
  ));

  register_sidebar( array(
  	'name'          => __( 'Recent News' ),
  	'id'            => 'recent-news',
  	'before_widget' => '<aside id="sidebar-widget" class="widget sidebar-widget recent-news">',
  	'after_widget'  => '</aside>',
  	'before_title'  => '<h1 class="widget-title"> Recent News!',
  	'after_title'   => '</h1>',
   ));

   register_sidebar( array(
    'name'          => __( 'Service Articles' ),
    'id'            => 'servicearticles',
    'before_widget' => '<aside id="sidebar-widget" class="widget sidebar-widget service-articles-sidebar">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h1 class="widget-title"> Service Articles News',
    'after_title'   => '</h1>',
    ));
}

/* END ENABLE CUSTOM MENUS */


// Create widgets in the footer
create_widget("Left Footer", "footer_left", "Displays in the left of the footer");
create_widget("Middle Footer", "footer_middle", "Displays in the middle of the footer");
create_widget("Right Footer", "footer_right", "Displays in the right of the footer");


?>
