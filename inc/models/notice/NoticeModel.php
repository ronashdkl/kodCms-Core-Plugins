<?php


namespace kodCmsPlugin\models\notice;

use ronashdkl\kodCms\components\FieldConfig;
use ronashdkl\kodCms\models\BaseModel;
use yii\helpers\ArrayHelper;

/**
 * Class AlertModel
 * @package kodCmsPlugin\models\alert
 */
class NoticeModel extends BaseModel
{
    public $styleAttribute = 'style';
    public $styleClass = NoticeStyleModel::class;

    public $style;
    public function rules()
    {
        return ArrayHelper::merge(parent::rules(),[['style','safe']]);
    }

}
