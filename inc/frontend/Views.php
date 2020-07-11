<?php


namespace kodCmsPlugin\frontend;


use kodCmsPlugin\models\contact\MapModel;
use kodCmsPlugin\models\seo\SeoModel;
use kodCmsPlugin\models\social\FacebookModel;
use kodCmsPlugin\models\social\InstagramModel;
use kodCmsPlugin\models\social\LinkedinModel;
use Yii;
use yii\base\View;
use yii\helpers\VarDumper;

class Views
{
    function getParams()
    {
        return [
            'social' => function ($social) {
                if ($social == 'facebook') {
                    return Yii::$app->appData->facebook;

                } elseif ($social == 'linkedin') {
                    return Yii::$app->appData->linkedin;
                } elseif ($social == 'instagram') {
                    return Yii::$app->appData->instagram;
                }
            },
            'seo' => function ($attribute) {
                if (YII_APP_ID == 2) {
                    return null;
                }
                $seo = Yii::$app->appData->seo;
                if ($seo->hasProperty($attribute)) {
                    return $seo->{$attribute};
                } else {
                    throw new \ronashdkl\kodCms\modules\admin\exceptions\PropertyException($attribute . " is not property of " . $seo->nameOfClass);
                }

            }];
    }

    public function register()
    {
        \Yii::$app->appData->seo = SeoModel::getInstance();
        \Yii::$app->appData->facebook = FacebookModel::getInstance();
        \Yii::$app->appData->linkedin = LinkedinModel::getInstance();
        \Yii::$app->appData->instagram = InstagramModel::getInstance();
        \Yii::$app->appData->map = MapModel::getInstance();

        Yii::$app->view->params = array_merge(  Yii::$app->view->params, $this->getParams());
    }
}