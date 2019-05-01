<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%batch_status}}".
 *
 * @property int $id
 * @property string $name
 * @property string $time
 * @property int $status 0禁用 1启用
 * @property string $trackType 轨迹类型
 */
class BatchStatus extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%batch_status}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'time', 'status', 'trackType'], 'required'],
            [['status'], 'integer'],
            [['name'], 'string', 'max' => 60],
            [['time'], 'string', 'max' => 18],
            [['trackType'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'time' => 'Time',
            'status' => '0禁用 1启用',
            'trackType' => '轨迹类型',
        ];
    }
}
