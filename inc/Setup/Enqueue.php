<?php
/**
 * 
 * @package Paradise
 */
namespace Paradise\Setup;

class Enqueue
{
    static $vendorBaseUrl = "/node_modules";
    var $styles = [
        [
            "handle"    => 'bootstrap',
            "css"       => '/node_modules/bootstrap/dist/css/bootstrap.css',
            "dep"       => [],
            "version"   => "4.3.1",
            "media"     => "all"
        ],

        [
            "handle"    => 'fontawesome',
            "css"       => '/node_modules/@fortawesome/fontawesome-free/css/all.css',
            "dep"       => [],
            "version"   => "5.15.1",
            "media"     => "all"
        ],
        [
            "handle"    => 'chart',
            "css"       => '/node_modules/chart.js/dist/Chart.css',
            "dep"       => [],
            "version"   => "2.9.4",
            "media"     => "all"
        ],

        [
            "handle"    => 'chart',
            "css"       => '/node_modules/chart.js/dist/Chart.css',
            "dep"       => [],
            "version"   => "2.9.4",
            "media"     => "all"
        ],
    ];

    var $scripts = [
        [
            "handle"    => 'bootstrap',
            "js"       => '/node_modules/@fortawesome/fontawesome-free/js/all.js',
            "dep"       => [],
            "version"   => "4.3.1",
            "footer"     => true
        ],
        [
            "handle"    => 'chart',
            "js"       => '/node_modules/chart.js/dist/Chart.js',
            "dep"       => [],
            "version"   => "2.9.4",
            "footer"     => true
        ],

        [
            "handle"    => 'jquery',
            "js"       => '/node_modules/jquery/dist/jquery.js',
            "dep"       => [],
            "version"   => "2.9.4",
            "footer"     => true
        ],
    ];

    public function register()
    {
        add_action( 'wp_enqueue_scripts', [$this, 'addStyles'] );
        add_action( 'wp_enqueue_scripts', [$this, 'addScripts'] );
    }

    public function addStyles()
    {
        foreach( $this->styles as $style ) {
            wp_enqueue_style( $style['handle'], get_template_directory_uri() . $style['css'], $style['dep'], $style['version'], $style['media'] );    
        }
        //wp_enqueue_style( "bootstrap", get_template_directory_uri() . "/vendor/twbs/bootstrap/dist/css/bootstrap.min.css", [], "1.2.2", "all" );
        //wp_enqueue_style( "fontawesome", get_template_directory_uri() . "/vendor/fortawesome/font-awesome/css/all.min.css", [], "1.2.2", "all" );
    }

    public function addScripts()
    {
        foreach( $this->scripts as $script ) {
            wp_enqueue_script( $script['handle'], get_template_directory_uri() . $script['js'], $script['dep'], $script['version'], $script['footer'] );
        }
        //wp_enqueue_script( "bootstrap-script", get_template_directory_uri() . "/vendor/twbs/bootstrap/dist/js/bootstrap.min.js", [  ], "5.0", true );
    }
}