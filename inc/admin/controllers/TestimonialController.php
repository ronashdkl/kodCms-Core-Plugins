<?php


namespace kodCmsPlugin\admin\controllers;


use kodCmsPlugin\models\testimonial\TestimonialModel;
use ronashdkl\kodCms\modules\admin\components\AdminSiteController;

/**
 * Class AboutController
 * @package ronashdkl\kodCms\modules\admin\controllers
 */
class TestimonialController extends AdminSiteController
{
    public $modelClass = TestimonialModel::class;


}
