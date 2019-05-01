<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%print_template}}".
 *
 * @property int $id
 * @property string $name 模板名称
 * @property string $template 模板
 * @property string $logo1
 * @property string $logo2
 * @property string $pic 预览图
 * @property int $width 单位mm
 * @property int $height 单位mm
 * @property int $status
 */
class PrintTemplate extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%print_template}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'template', 'logo1', 'logo2', 'pic', 'status'], 'required'],
            [['width', 'height', 'status'], 'integer'],
            [['name'], 'string', 'max' => 30],
            [['template'], 'string', 'max' => 6],
            [['logo1', 'logo2', 'pic'], 'string', 'max' => 60],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => '模板名称',
            'template' => '模板',
            'logo1' => 'Logo1',
            'logo2' => 'Logo2',
            'pic' => '预览图',
            'width' => '单位mm',
            'height' => '单位mm',
            'status' => 'Status',
        ];
    }
}
