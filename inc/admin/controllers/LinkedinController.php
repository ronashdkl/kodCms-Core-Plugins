<?php


namespace kodCmsPlugin\admin\controllers;



use kodCmsPlugin\models\social\LinkedinModel;
use ronashdkl\kodCms\modules\admin\actions\SaveAction;
use ronashdkl\kodCms\modules\admin\components\AdminSiteController;



class LinkedinController extends AdminSiteController
{
    public $modelClass = LinkedinModel::class;
    public function actions()
    {
        return [
            'update'=>SaveAction::class
        ];
    }
}