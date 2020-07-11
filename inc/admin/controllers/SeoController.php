<?php

namespace kodCmsPlugin\admin\controllers;




use kodCmsPlugin\models\seo\SeoModel;
use ronashdkl\kodCms\modules\admin\components\AdminSiteController;

class SeoController extends AdminSiteController
{
public $modelClass = SeoModel::class;
}