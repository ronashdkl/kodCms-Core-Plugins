<?php


namespace kodCmsPlugin\widgets\sections\price;


use kodCmsPlugin\models\price\PriceModel;
use kodCmsPlugin\widgets\sections\SectionWidget;

class PriceWidget extends SectionWidget
{

    public static function navId()
    {
       return "PriceWidget";
    }
    public function run()
    {
        parent::run();
        return $this->render('index',['model'=>new PriceModel()]);
    }
}