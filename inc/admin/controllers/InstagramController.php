<?php


namespace kodCmsPlugin\admin\controllers;


use kodCmsPlugin\models\social\InstagramModel;
use ronashdkl\kodCms\modules\admin\actions\SaveAction;
use ronashdkl\kodCms\modules\admin\components\AdminSiteController;



class InstagramController extends AdminSiteController
{
    public $modelClass = InstagramModel::class;
    public function actions()
    {
        return [
            'update'=>SaveAction::class
        ];
    }
}
