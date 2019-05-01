<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%relation}}".
 *
 * @property string $id
 * @property int $ordinal
 * @property string $name
 * @property string $url
 * @property string $target
 * @property string $lang
 * @property string $ico
 */
class Relation extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%relation}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'name', 'url', 'target', 'lang', 'ico'], 'required'],
            [['ordinal'], 'integer'],
            [['id', 'target', 'lang'], 'string', 'max' => 20],
            [['name'], 'string', 'max' => 50],
            [['url', 'ico'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ordinal' => 'Ordinal',
            'name' => 'Name',
            'url' => 'Url',
            'target' => 'Target',
            'lang' => 'Lang',
            'ico' => 'Ico',
        ];
    }
}
