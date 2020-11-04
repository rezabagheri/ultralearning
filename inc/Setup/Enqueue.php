<?php
/**
 * 
 * @package Paradise
 */
namespace Paradise\Setup;

class Enqueue
{
    public function register()
    {
        add_action( 'wp_enqueue_scripts', [$this, 'addStyles'] );
        add_action( 'wp_enqueue_scripts', [$this, 'addScripts'] );
    }

    public function addStyles()
    {
        //wp_enqueue_style( "theme-css", get_template_directory_uri() . "/assets/css/style.css", [], "1.0", "all" );
        //wp_enqueue_style( "theme-bootstrap", get_template_directory_uri() . "/vendor/twbs/bootstrap/dist/css/bootstrap.min.css", [], "5.0", "all" );
        wp_enqueue_style( "jvector-map-style", get_template_directory_uri() . "/vendor/jquery-jvectormap/css/jquery-jvectormap-1.2.2.css", [], "1.2.2", "all" );
        wp_enqueue_style( "icon-style", get_template_directory_uri() . "/assets/dist/css/icons.min.css", [], "1.2.2", "all" );
        wp_enqueue_style( "app-style", get_template_directory_uri() . "/assets/dist/css/app.min.css", [], "1.2.2", "all" );
        
        wp_enqueue_style( "app-dark-style", get_template_directory_uri() . "/assets/dist/css/app-dark.min.css", [], "1.2.2", "all" );
        wp_enqueue_style( "fontawesome", get_template_directory_uri() . "/vendor/fortawesome/font-awesome/css/all.min.css", [], "1.2.2", "all" );
        //wp_enqueue_style( "theme-carosel", get_template_directory_uri() . "/assets/css/carousel.css", [], "1.0", "all" );
    }

    public function addScripts()
    {
        //wp_enqueue_script( "theme-scripts", get_template_directory_uri() . "/assets/js/scripts.js", [ 'jquery' ], "1.0", true );
        //wp_enqueue_script( "popper-scripts", get_template_directory_uri() . "/assets/js/popper.js", [ 'jquery' ], "1.0", true );
        wp_enqueue_script( "vendor-sc", get_template_directory_uri() . "/assets/js/vendor.min.js", [  ], "5.0", true );
        wp_enqueue_script( "app-sc", get_template_directory_uri() . "/assets/js/app.min.js", [  ], "5.0", true );

        wp_enqueue_script( "appexchart-sc", get_template_directory_uri() . "/assets/js/vendor/apexcharts.min.js", [  ], "5.0", true );
        wp_enqueue_script( "jvectormap-sc", get_template_directory_uri() . "/assets/js/vendor/jquery-jvectormap-1.2.2.min.js", [  ], "5.0", true );

        wp_enqueue_script( "jvectormap-world-sc", get_template_directory_uri() . "/assets/js/vendor/jquery-jvectormap-world-mill-en.js", [  ], "5.0", true );
        
        wp_enqueue_script( "demo-sc", get_template_directory_uri() . "/assets/js/pages/demo.dashboard.js", [  ], "5.0", true );
        

    }
}