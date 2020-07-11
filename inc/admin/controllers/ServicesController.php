<?php


namespace kodCmsPlugin\admin\controllers;



use kodCmsPlugin\models\service\ServiceModel;
use ronashdkl\kodCms\modules\admin\components\AdminSiteController;

/**
 * Class AboutController
 * @package ronashdkl\kodCms\modules\admin\controllers
 */
class ServicesController extends AdminSiteController
{
    public $modelClass = ServiceModel::class;


}
