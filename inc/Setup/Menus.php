<?php
/**
 * 
 * @package Paradise
 */
namespace Paradise\Setup;

class Menus
{
    function register()
    {
        add_action("after_setup_theme", [$this, 'registerNavMenus' ], 0 );
        add_filter("nav_menu_css_class", [$this , "addLiClass"], 1, 3 );
        add_filter("nav_menu_link_attributes", [$this , "addLinkAttributes"], 1, 3 );
        //add_filter("wp_nav_menu_items", [$this, "themeMenuItem"], 10 ,2);
    }

    public function registerNavMenus()
    {
        register_nav_menus(
            [
                'primary_menu' => 'Primary Menu',
                'footer_menu' => 'Footer Menu',
                'nav_menu'  => ' Nav Menu'
            ]
        );
    }

    public function addLiClass( $classes, $item, $args )
    {
        $classes[] = "side-nav-item";
        return $classes;
    }

    public function  addLinkAttributes( $classes, $item, $args )
    {   
        $classes['class'] = "side-nav-link";

        return $classes;
    }

    public function themeMenuItem( $item, $args) {
        //if(isset(get_the_field()))
        return '<i class="fas fa-home"></i>'.$item;

    }
}