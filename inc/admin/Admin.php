<?php


namespace kodCmsPlugin\admin;


use kodCmsPlugin\admin\controllers\ClientsController;
use kodCmsPlugin\admin\controllers\ContactController;
use kodCmsPlugin\admin\controllers\DetailBoxController;
use kodCmsPlugin\admin\controllers\FacebookController;
use kodCmsPlugin\admin\controllers\HeaderController;
use kodCmsPlugin\admin\controllers\InstagramController;
use kodCmsPlugin\admin\controllers\LinkedinController;
use kodCmsPlugin\admin\controllers\MapController;
use kodCmsPlugin\admin\controllers\MenuController;
use kodCmsPlugin\admin\controllers\NoticeController;
use kodCmsPlugin\admin\controllers\PriceController;
use kodCmsPlugin\admin\controllers\SeoController;
use kodCmsPlugin\admin\controllers\ServicesController;
use kodCmsPlugin\admin\controllers\TestimonialController;
use kodCmsPlugin\admin\controllers\TopMenuController;
use yii\helpers\ArrayHelper;
use yii\helpers\VarDumper;


class Admin
{

    /**
     * Register Block menu on admin panel
     * @return array
     */

    function registerBlockMenu()
    {
        return [];
    }

    /**
     * Register menu on admin panel

     * @return array
     */
    function registerMenu($menu)
    {
          return array_merge($menu,[

        ['label' => 'KodCms Plugin','icon'=>'plug', 'items'=>[
            ['label' => 'Menu', 'url' => ['/admin/menu']],
            ['label' => 'Hero', 'url' => ['/admin/header']],
            ['label' => 'Clients', 'url' => ['/admin/clients']],
            ['label' => 'Services', 'url' => ['/admin/services']],
            ['label' => 'Detail Box', 'url' => ['/admin/detail-box']],
            ['label' => 'Testimonial', 'url' => ['/admin/testimonial']],
            ['label' => 'Price', 'url' => ['/admin/price']],
            ['label' => 'Contact', 'icon' => 'phone','url' => ['/admin/contact']],

        ]],

    ]);
    }

    function addController($controllers)
    {
        return ArrayHelper::merge($controllers,[
            'clients'=>ClientsController::class,
            'detail-box'=>DetailBoxController::class,
            'header'=>HeaderController::class,
            'price'=>PriceController::class,
            'services'=>ServicesController::class,
            'testimonial'=>TestimonialController::class,
            'top-menu'=>TopMenuController::class,
            'menu'=>MenuController::class,
            'contact'=>ContactController::class,
            'facebook'=>FacebookController::class,
            'instagram'=>InstagramController::class,
            'linkedin'=>LinkedinController::class,
            'map'=>MapController::class,
            'notice'=>NoticeController::class,
            'seo'=>SeoController::class

        ]);
    }

    function register()
    {
        \Yii::$app->hooks->add_filter('admin_menu_blocks', [self::class, 'registerBlockMenu'], 10);
        \Yii::$app->hooks->add_filter('admin_menu', [self::class, 'registerMenu'], 10);
         \Yii::$app->hooks->add_filter('admin_controller',[self::class,'addController'],10);
      //  \Yii::$app->view->params = arr
    }
}
