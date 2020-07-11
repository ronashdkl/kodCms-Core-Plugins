<?php


namespace kodCmsPlugin\widgets\sections\about;


use yii\web\AssetBundle;

class ResizeSensorAsset extends AssetBundle
{
public $sourcePath;
public function init()
{
    parent::init();
    $this->sourcePath = dirname(__DIR__)."/../../../assets/";
}

    public $js = ["resize.js"];

}