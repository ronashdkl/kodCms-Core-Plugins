<?php


namespace kodCmsPlugin\widgets\sections\clients;


use kodCmsPlugin\models\client\ClientModel;
use kodCmsPlugin\widgets\sections\SectionWidget;

class ClientsWidget extends SectionWidget
{
public $model;
    public static function navId()
    {
        return "clients";
    }



    public function run()
    {

        parent::run();
        return $this->render('clients',['model'=>new ClientModel()]);
    }
}