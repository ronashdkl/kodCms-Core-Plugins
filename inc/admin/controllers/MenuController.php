<?php


namespace kodCmsPlugin\admin\controllers;



use kodCmsPlugin\models\menu\MenuModel;
use ronashdkl\kodCms\modules\admin\components\AdminSiteController;

/**
 * Class AboutController
 * @package ronashdkl\kodCms\modules\admin\controllers
 */
class MenuController extends AdminSiteController
{
    public $modelClass = MenuModel::class;


}
