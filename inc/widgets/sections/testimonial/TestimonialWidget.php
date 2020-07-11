<?php


namespace kodCmsPlugin\widgets\sections\testimonial;


use kodCmsPlugin\models\testimonial\TestimonialModel;
use kodCmsPlugin\widgets\sections\SectionWidget;

class TestimonialWidget extends SectionWidget
{

    public static function navId()
    {
        return "Testimonial";
    }
    public function run()
    {
        parent::run();
        return $this->render('index',['model'=>new TestimonialModel()]);
    }
}