<?php


namespace kodCmsPlugin\admin\controllers;



use kodCmsPlugin\models\menu\MenuModel;
use ronashdkl\kodCms\modules\admin\components\AdminSiteController;
use yii\helpers\ArrayHelper;
use yii\helpers\VarDumper;

/**
 * Class AboutController
 * @package ronashdkl\kodCms\modules\admin\controllers
 */
class MenuController extends AdminSiteController
{
    public function beforeAction($action)
    {
        return parent::beforeAction($action); // TODO: Change the autogenerated stub
    }

    public $modelClass = MenuModel::class;


}
