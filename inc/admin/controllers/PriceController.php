<?php


namespace kodCmsPlugin\admin\controllers;



use kodCmsPlugin\models\price\PriceModel;
use ronashdkl\kodCms\modules\admin\components\AdminSiteController;

class PriceController extends AdminSiteController
{
public $modelClass = PriceModel::class;
}