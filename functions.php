<?php
/**
 * 
 * @package Paradise_Ultra_Learning
 */

if ( file_exists( dirname( __FILE__ ) . '/vendor/autoload.php') ) :
    require_once dirname( __FILE__ ) . '/vendor/autoload.php' ;
    
 endif;

 Paradise\Init::register_classes();
