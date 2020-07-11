<?php


namespace kodCmsPlugin\admin\controllers;


use kodCmsPlugin\models\social\FacebookModel;
use ronashdkl\kodCms\modules\admin\actions\SaveAction;
use ronashdkl\kodCms\modules\admin\components\AdminSiteController;



class FacebookController extends AdminSiteController
{
    public $modelClass = FacebookModel::class;
    public function actions()
    {
        return [
            'update'=>SaveAction::class
        ];
    }
}