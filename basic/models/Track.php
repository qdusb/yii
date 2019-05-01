<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%track}}".
 *
 * @property int $id
 * @property int $code 轨迹编码
 * @property string $type 类型
 * @property int $orderId
 * @property int $createTime
 * @property int $updateTime
 * @property int $operatorId
 * @property string $place
 * @property string $memo
 * @property int $status
 */
class Track extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%track}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['code', 'type', 'orderId', 'createTime', 'updateTime', 'operatorId', 'place', 'memo'], 'required'],
            [['code', 'orderId', 'createTime', 'updateTime', 'operatorId', 'status'], 'integer'],
            [['type', 'place'], 'string', 'max' => 30],
            [['memo'], 'string', 'max' => 500],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'code' => '轨迹编码',
            'type' => '类型',
            'orderId' => 'Order ID',
            'createTime' => 'Create Time',
            'updateTime' => 'Update Time',
            'operatorId' => 'Operator ID',
            'place' => 'Place',
            'memo' => 'Memo',
            'status' => 'Status',
        ];
    }
}
