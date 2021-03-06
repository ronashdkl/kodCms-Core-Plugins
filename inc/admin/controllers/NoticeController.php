<?php


namespace kodCmsPlugin\admin\controllers;


use kodCmsPlugin\models\notice\NoticeModel;
use ronashdkl\kodCms\modules\admin\actions\SaveAction;
use ronashdkl\kodCms\modules\admin\actions\StyleAction;
use ronashdkl\kodCms\modules\admin\components\AdminSiteController;

class NoticeController extends AdminSiteController
{
public $modelClass = NoticeModel::class;
public function init()
{
    parent::init(); // TODO: Change the autogenerated stub

}

    public function actions()
    {
        $actions =[];
        $actions['update'] = ['class'=>SaveAction::class];
        $actions['style'] = ['class'=>StyleAction::class,'styleModel'=>$this->model->styleModel];
        return $actions;
    }
}