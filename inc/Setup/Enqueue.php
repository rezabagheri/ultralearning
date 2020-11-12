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
            "handle"    => 'fontawesome',
            "css"       => '/node_modules/@fortawesome/fontawesome-free/css/all.css',
            "dep"       => [],
            "version"   => "5.15.1",
            "media"     => "all",
        ],
        [
            "handle"    => 'all',
            "css"       => '/assets/css/sb-admin-2.css',
            "dep"       => [],
            "version"   => "5.15.1",
            "media"     => "all",
        ],
        [
            "handle"    => 'sb-admin-rtl',
            "css"       => '/assets/css/sb-admin-rtl.css',
            "dep"       => [],
            "version"   => "5.15.1",
        ],
        [
            "handle"    => 'bootstrap',
            "css"       => '/node_modules/bootstrap/dist/css/bootstrap.css',
            "dep"       => [],
            "version"   => "5.15.1",
            "media"     => "all",
        ],
    ];

    var $adminStyles = [
        [
            "handle"    => 'bootstrap',
            "css"       => '/node_modules/bootstrap/dist/css/bootstrap.css',
            "dep"       => [],
            "version"   => "5.15.1",
            "media"     => "all",
        ],
        [
            "handle"    => 'sb-admin',
            "css"       => '/assets/css/sb-admin-2.css',
            "dep"       => [],
            "version"   => "5.15.1",
            "media"     => "all",
        ],
        [
            "handle"    => 'fontawesome',
            "css"       => '/node_modules/@fortawesome/fontawesome-free/css/all.css',
            "dep"       => [],
            "version"   => "5.15.1",
            "media"     => "all",
        ],

        [
            "handle"    => 'sb-admin-backend',
            "css"       => '/assets/css/sb-admin-2.backend.css',
            "dep"       => [],
            "version"   => "5.15.1",
            "media"     => "all",
        ],
    ];

    var $scripts = [
        [
            "handle"    => 'jquery',
            "js"       => '/node_modules/jquery/dist/jquery.js',
            "dep"       => [],
            "version"   => "2.9.4",
            "footer"     => true
        ],
        [
            "handle"    => 'bootstrap',
            "js"       => '/node_modules/bootstrap/dist/js/bootstrap.bundle.js',
            "dep"       => [],
            "version"   => "4.3.1",
            "footer"     => true
        ],
        [
            "handle"    => 'jquery-easing',
            "js"       => '/node_modules/jquery.easing/jquery.easing.js',
            "dep"       => [],
            "version"   => "4.3.1",
            "footer"     => true
        ],
        [
            "handle"    => 'sb-admin',
            "js"       => '/assets/js/sb-admin-2.js',
            "dep"       => [],
            "version"   => "4.3.1",
            "footer"     => true
        ],
        [
            "handle"    => 'chart',
            "js"       => '/node_modules/chart.js/dist/Chart.min.css',
            "dep"       => [],
            "version"   => "4.3.1",
            "footer"     => true
        ],
        [
            "handle"    => 'chart-area',
            "js"       => '/assets/js/demo/chart-area-demo.js',
            "dep"       => [],
            "version"   => "4.3.1",
            "footer"     => true
        ],
        [
            "handle"    => 'chart-pie',
            "js"       => '/assets/js/demo/chart-pie-demo.js',
            "dep"       => [],
            "version"   => "4.3.1",
            "footer"     => true
        ],
      

        
    ];

    var $adminScripts = [
        [
            "handle"    => 'jquery',
            "js"       => '/node_modules/jquery/dist/jquery.js',
            "dep"       => [],
            "version"   => "2.9.4",
            "footer"     => true
        ],
        [
            "handle"    => 'bootstrap',
            "js"       => '/node_modules/bootstrap/dist/js/bootstrap.bundle.js',
            "dep"       => [],
            "version"   => "4.3.1",
            "footer"     => true
        ],
        [
            "handle"    => 'jquery-easing',
            "js"       => '/node_modules/jquery.easing/jquery.easing.js',
            "dep"       => [],
            "version"   => "4.3.1",
            "footer"     => true
        ],
    ];

    public function register()
    {
        add_action( 'wp_enqueue_scripts', [$this, 'addStyles'] );
        add_action( 'wp_enqueue_scripts', [$this, 'addScripts'] );
        add_action( 'admin_enqueue_scripts', [$this, 'addAdminScripts'] );
        add_action( 'admin_enqueue_scripts', [$this, 'addAdminStyles'] );
    }

    public function addStyles()
    {
        foreach( $this->styles as $style ) {
            wp_enqueue_style( $style['handle'], get_template_directory_uri() . $style['css'], $style['dep'], $style['version'], $style['media'] );            
        }
    }

    public function addScripts()
    {
        foreach( $this->scripts as $script ) {
            wp_enqueue_script( $script['handle'], get_template_directory_uri() . $script['js'], $script['dep'], $script['version'], $script['footer'] );
        }
    }

    public function addAdminScripts()
    {
        foreach( $this->adminScripts as $script ) {
            wp_enqueue_script( $script['handle'], get_template_directory_uri() . $script['js'], $script['dep'], $script['version'], $script['footer'] );
        }
    }

    public function addAdminStyles()
    {
        foreach( $this->adminStyles as $style ) {
            wp_enqueue_style( $style['handle'], get_template_directory_uri() . $style['css'], $style['dep'], $style['version'], $style['media'] );            
        }

    }
}