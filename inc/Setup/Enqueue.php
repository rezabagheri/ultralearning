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
        wp_enqueue_style( "bootstrap", get_template_directory_uri() . "/vendor/twbs/bootstrap/dist/css/bootstrap.min.css", [], "1.2.2", "all" );
        wp_enqueue_style( "fontawesome", get_template_directory_uri() . "/vendor/fortawesome/font-awesome/css/all.min.css", [], "1.2.2", "all" );
    }

    public function addScripts()
    {
        wp_enqueue_script( "bootstrap-script", get_template_directory_uri() . "/vendor/twbs/bootstrap/dist/js/bootstrap.min.js", [  ], "5.0", true );
    }
}