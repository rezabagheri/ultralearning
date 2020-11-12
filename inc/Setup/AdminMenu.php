<?php
/**
 * 
 * @package Paradise
 */
namespace Paradise\Setup;

use Paradise\Setup\AdminMenu\AdminIndex;

class AdminMenu
{
    var $Menus = [
        [
            //"viewBase" => 'AdminMenu',
            "base" => [
                "page_title"    => "Paradise LMS System",
                "menu_title"    => "PLMS",
                "capability"    => "manage_options",
                "menu_slug"     => "plms_theme",
                "view"          => "AdminIndex",
                "icon"          => "dashicons-welcome-learn-more",
                "position"      => 5
            ],
            "subs" => [
                [
                    "page_title"    => "Courses Manager",
                    "menu_title"    => "Courses",
                    "menu_slug"     => "plms_theme_courses",
                    "view"          => "CoursesIndex",
                    "capability"    => "manage_options",
                    "position"      => 1
                ],
                [
                    "page_title"    => "Students Manager",
                    "menu_title"    => "Students",
                    "menu_slug"     => "plms_theme_students",
                    "view"          => "StudentsIndex",
                    "capability"    => "manage_options",
                    "position"      => 1
                    ]
            ]
        ],
        
    ];

    public function register()
    {
        add_action( 'admin_menu', [$this, 'addAminPages']);
    }

    public function addAminPages()
    {
        foreach( $this->Menus as $menu) {
            $_view = $menu["base"]["view"];
            add_menu_page(
                $menu["base"]['page_title'],
                $menu["base"]["menu_title"],
                $menu["base"]["capability"],
                $menu["base"]["menu_slug"],
                function( $view ) use( $_view ) {
                    return $this->view($_view);
                }, 
                $menu["base"]["icon"],
                $menu["base"]["position"]
            );

            foreach( $menu["subs"] as $sub) {
                //print_r($sub);
                $_sview = $sub['view'];
                add_submenu_page( 
                    $menu["base"]["menu_slug"], 
                    $sub["page_title"],
                    $sub["menu_title"],
                    $sub["capability"],
                    $sub["menu_slug"],
                    function( $view ) use( $_sview ) {
                        return $this->view($_sview);
                    }, 
                    $sub["position"]);
            }
        }
    }

    public function view($viewName) 
    {
        require_once( __DIR__.'/AdminMenu/'.$viewName.'.php');
    }
    
    public function  adminIndex()
    {
        require_once( __DIR__.'/AdminMenu/AdminIndex.php');
    }
}