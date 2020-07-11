<?php

namespace kodCmsPlugin\widgets\sections\details;

use kodCmsPlugin\models\detail\DetailModel;

use kodCmsPlugin\widgets\sections\SectionWidget;
use ronashdkl\kodCms\models\post\PostModel;

class PostDetailWidget extends SectionWidget{

    public static function navId()
    {
        return "PostDetail";
    }

    public function run()
    {
        parent::run();
        $model = new DetailModel();
        $post = null;
        if($model->post){
            $post = PostModel::findOne(['slug'=>$model->post]);
        }
        return $this->render('detail_one',['model'=>new DetailModel(),'post'=>$post]);
    }
}