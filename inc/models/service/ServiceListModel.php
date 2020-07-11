<?php


namespace kodCmsPlugin\models\service;


use ronashdkl\kodCms\components\FieldConfig;
use ronashdkl\kodCms\models\ListModel;
use yii\base\Model;
use yii\helpers\ArrayHelper;

/**
 * Class AboutListModel
 * @property string $text
 * @package kodCmsPlugin\models\service
 */
class ServiceListModel extends ListModel
{

    public $name;
    public $summary;
    public $image;
    public function rules()
    {

        return ArrayHelper::merge(parent::rules(), [
            ['image', 'string'],
            ['name', 'required'],
            ['summary', 'required'],
        ]);

    }

    public function formTypes()
    {
        return [
            'name' => [
                // 'value' => $this->text,
                'type' => FieldConfig::INPUT,
            ],


            'summary' => [
                // 'value' => $this->text,
                'type' => FieldConfig::CKEDITOR,
            ],
            'image' => [
                // 'value' => $this->text,
                'type' => FieldConfig::IMAGE,
            ],
        ];
    }

    public  function displayAttributes()
    {
        return  ['name','image'];
    }

    public function validate($attributeNames = null, $clearErrors = true)
    {
        return parent::validate($attributeNames, $clearErrors); // TODO: Change the autogenerated stub
    }
}