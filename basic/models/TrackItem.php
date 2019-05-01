<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%track_item}}".
 *
 * @property int $id
 * @property int $code 轨迹编码
 * @property string $place
 * @property string $memo
 * @property string $type 轨迹类型
 */
class TrackItem extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%track_item}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['code', 'place', 'memo', 'type'], 'required'],
            [['code'], 'integer'],
            [['place'], 'string', 'max' => 30],
            [['memo'], 'string', 'max' => 500],
            [['type'], 'string', 'max' => 60],
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
            'place' => 'Place',
            'memo' => 'Memo',
            'type' => '轨迹类型',
        ];
    }
}
