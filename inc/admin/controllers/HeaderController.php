<?php


namespace kodCmsPlugin\admin\controllers;


use kodCmsPlugin\models\header\HeaderModel;
use ronashdkl\kodCms\modules\admin\components\AdminSiteController;

class HeaderController extends AdminSiteController
{
protected $modelClass = HeaderModel::class;
}