<?php
namespace kodCmsPlugin\widgets\sections\header;



use kodCmsPlugin\models\header\HeaderModel;
use kodCmsPlugin\widgets\sections\SectionWidget;

class HeaderWidget extends SectionWidget
{




    public function run()
   {
       parent::run();

      // return $this->render($model->mode,['model'=>$model,'isHome'=>$isHome]);
       return $this->render('light',['model'=>new HeaderModel()]);
   }

    public static function navId()
    {
        return 'header';
    }
}
