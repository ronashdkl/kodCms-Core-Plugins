<?php

/**
 * Class RonashPlugin
 * class must be suffix with Plugin eg ExamplePlugin;
 */
class IndexPlugin {
    function __construct()
    {
        require __DIR__."/vendor/autoload.php";
        Yii::setAlias('@kodCmsPlugin',dirname(__FILE__)."/inc/");
    }

    function install(){
    }

    public function register(){

        \kodCmsPlugin\Init::registerServices();
        return;
     }
     function disable(){

     }
     function uninstall(){

     }



}




