<?php


namespace kodCmsPlugin\admin\controllers;


use kodCmsPlugin\models\detail\DetailModel;
use ronashdkl\kodCms\modules\admin\components\AdminSiteController;

class DetailBoxController extends AdminSiteController
{
public $modelClass = DetailModel::class;
}