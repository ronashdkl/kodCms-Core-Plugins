<?php


namespace kodCmsPlugin\admin\controllers;


use kodCmsPlugin\models\menu\TopMenuModel;
use ronashdkl\kodCms\modules\admin\components\AdminSiteController;

/**
 * Class AboutController
 * @package ronashdkl\kodCms\modules\admin\controllers
 */
class TopMenuController extends AdminSiteController
{
    public $modelClass = TopMenuModel::class;


}
