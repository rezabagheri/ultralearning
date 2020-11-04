<?php
/**
 * 
 * @package Paradise
 */
namespace Paradise\Setup;

use Paradise\Setup\PostTypes\Course;

class PostTypes
{
    public function register()
    {
        $this->register_classes();
    }

    public static function get_classes()
    {
        return [
            Course::class,
            //Setup\Setup::class,
            //Setup\Enqueue::class,
            //Setup\Menus::class,
            //Setup\PostTypes::class,
            // Woocommerce\Woocommerce::class,
        ];
    }

    public static function register_classes()
    {
        foreach ( self::get_classes() as $class ) {
			$service = self::instantiate( $class );
			if ( method_exists( $service, 'register') ) {
				$service->register();
			}
		}

    }

    private static function instantiate( $class )
	{
		return new $class();
	}
}