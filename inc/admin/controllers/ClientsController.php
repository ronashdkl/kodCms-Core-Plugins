<?php


namespace kodCmsPlugin\admin\controllers;


use kodCmsPlugin\models\client\ClientModel;
use ronashdkl\kodCms\modules\admin\components\AdminSiteController;

/**
 * Class AboutController
 * @package ronashdkl\kodCms\modules\admin\controllers
 */
class ClientsController extends AdminSiteController
{
    public $modelClass = ClientModel::class;


}
