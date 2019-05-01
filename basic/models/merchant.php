<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%merchant}}".
 *
 * @property int $id
 * @property string $name
 * @property string $code
 * @property string $phone
 * @property string $address
 * @property string $contacter
 * @property string $secret
 * @property int $status
 * @property int $userId 关联会员
 * @property int $createTime
 */
class merchant extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%merchant}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'code', 'phone', 'address', 'contacter', 'secret', 'status', 'userId', 'createTime'], 'required'],
            [['status', 'userId', 'createTime'], 'integer'],
            [['name', 'code'], 'string', 'max' => 20],
            [['phone'], 'string', 'max' => 16],
            [['address'], 'string', 'max' => 120],
            [['contacter'], 'string', 'max' => 30],
            [['secret'], 'string', 'max' => 64],
            [['name'], 'unique'],
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
            'code' => 'Code',
            'phone' => 'Phone',
            'address' => 'Address',
            'contacter' => 'Contacter',
            'secret' => 'Secret',
            'status' => 'Status',
            'userId' => '关联会员',
            'createTime' => 'Create Time',
        ];
    }
}
