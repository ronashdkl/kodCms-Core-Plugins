<?php

/**
 * Class RonashPlugin
 * class must be suffix with Plugin eg ExamplePlugin;
 */
class IndexPlugin {


    function install(){
    }

    public function register(){
         Yii::setAlias('@kodCmsPlugin',dirname(__FILE__)."/inc/");
        \kodCmsPlugin\Init::registerServices();
        return;
     }
     function disable(){

     }
     function uninstall(){

     }



}




