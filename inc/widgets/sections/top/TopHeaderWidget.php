<?php

namespace kodCmsPlugin\widgets\sections\top;

use kodCmsPlugin\models\menu\MenuModel;
use yii\base\Widget;

class TopHeaderWidget extends Widget
{
    const TYPE_INFO = 1;
    const TYPE_NAVIGATION = 2;
    public $type = self::TYPE_INFO;
    public $color = '#ff6601';


    public function run()
    {
        parent::run();
        $model = new MenuModel();
        if($model->list>0) {
            return $this->render('info', ['model' => new MenuModel()]);
        }
        return null;
    }
}
