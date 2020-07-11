<?php


namespace kodCmsPlugin\widgets\sections\service;


use kodCmsPlugin\models\service\ServiceModel;
use kodCmsPlugin\widgets\sections\SectionWidget;

class ServiceWidget extends SectionWidget
{

    public static function navId()
    {
       return "Service";
    }

    public function run()
    {
        parent::run();
        return $this->render('index',['model'=>new ServiceModel()]);
    }
}