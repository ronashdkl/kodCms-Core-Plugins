<?php


namespace kodCmsPlugin;


use kodCmsPlugin\frontend\Blocks;
use kodCmsPlugin\frontend\Views;


class Init
{
    public static $services = [
        Views::class,
        Blocks::class,
        \kodCmsPlugin\admin\Admin::class,
    ];

    public static $routes = [
        'admin/block-setting/add-list'
    ];
    /**
     * loop through the classes, initialize them,
     * and call register method if exists
     *
     * @return void
     */
    public static function registerServices(){
        foreach(self::$services as $class){
            $service = self::instantiate($class);
            if(method_exists($service, 'register')){
                $service->register();
            }
        }
    }

    /**
     * Initialize the class
     *
     * @param class  $class class from the service array
     * @return  instance new instance of the class
     */
    private static function instantiate($class){
        return new $class();
    }

}