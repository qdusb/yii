<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%batch}}".
 *
 * @property int $id
 * @property string $No
 * @property string $name
 * @property int $createTime
 * @property int $updateTime
 * @property int $operatorId
 * @property int $status
 * @property string $express
 * @property int $line
 * @property string $parcelNo
 * @property string $parcelFile
 * @property int $flightDate 起飞时间
 * @property int $arrivalDate 到达时间
 * @property string $waybillCode 航空单号
 */
class Batch extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%batch}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['No', 'name', 'createTime', 'updateTime', 'express', 'parcelNo', 'parcelFile', 'flightDate', 'arrivalDate', 'waybillCode'], 'required'],
            [['createTime', 'updateTime', 'operatorId', 'status', 'line', 'flightDate', 'arrivalDate'], 'integer'],
            [['No', 'parcelNo', 'waybillCode'], 'string', 'max' => 30],
            [['name', 'express'], 'string', 'max' => 50],
            [['parcelFile'], 'string', 'max' => 40],
            [['No'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'No' => 'No',
            'name' => 'Name',
            'createTime' => 'Create Time',
            'updateTime' => 'Update Time',
            'operatorId' => 'Operator ID',
            'status' => 'Status',
            'express' => 'Express',
            'line' => 'Line',
            'parcelNo' => 'Parcel No',
            'parcelFile' => 'Parcel File',
            'flightDate' => '起飞时间',
            'arrivalDate' => '到达时间',
            'waybillCode' => '航空单号',
        ];
    }
}
