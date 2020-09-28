<?php


namespace kodCmsPlugin\frontend;


use kodCmsPlugin\widgets\sections\about\AboutListSectionWidget;
use kodCmsPlugin\widgets\sections\clients\ClientsWidget;
use kodCmsPlugin\widgets\sections\details\PostDetailWidget;
use kodCmsPlugin\widgets\sections\footer\FooterWidget;
use kodCmsPlugin\widgets\sections\header\HeaderWidget;
use kodCmsPlugin\widgets\sections\price\PriceWidget;
use kodCmsPlugin\widgets\sections\service\ServiceWidget;
use kodCmsPlugin\widgets\sections\testimonial\TestimonialWidget;
use kodCmsPlugin\widgets\sections\top\TopHeaderWidget;
use yii\helpers\VarDumper;

class Blocks
{
    private $list = [
        TopHeaderWidget::class,
        HeaderWidget::class,
        ServiceWidget::class,
        PostDetailWidget::class,
        AboutListSectionWidget::class,
        PriceWidget::class,
        TestimonialWidget::class,
        ClientsWidget::class,
        FooterWidget::class,
    ];

    public function register()
    {
        \Yii::$app->hooks->add_filter('block_list',function($list){
            return array_merge($list,$this->list);
        });
    }
}