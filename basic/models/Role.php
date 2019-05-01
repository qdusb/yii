<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%role}}".
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property int $isSystem
 * @property int $isSuper
 * @property string $action
 * @property string $info
 * @property string $infoClass
 * @property string $relation
 * @property int $staff 员工
 * @property string $role
 * @property int $driver
 * @property int $agent
 * @property int $warehouse
 * @property int $financial
 * @property int $branch 分公司角色
 * @property int $member 会员角色
 */
class Role extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%role}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'staff', 'role', 'driver', 'agent', 'warehouse', 'financial', 'branch', 'member'], 'required'],
            [['isSystem', 'isSuper', 'staff', 'driver', 'agent', 'warehouse', 'financial', 'branch', 'member'], 'integer'],
            [['action', 'info', 'infoClass', 'relation'], 'string'],
            [['name'], 'string', 'max' => 50],
            [['description'], 'string', 'max' => 250],
            [['role'], 'string', 'max' => 10],
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
            'description' => 'Description',
            'isSystem' => 'Is System',
            'isSuper' => 'Is Super',
            'action' => 'Action',
            'info' => 'Info',
            'infoClass' => 'Info Class',
            'relation' => 'Relation',
            'staff' => '员工',
            'role' => 'Role',
            'driver' => 'Driver',
            'agent' => 'Agent',
            'warehouse' => 'Warehouse',
            'financial' => 'Financial',
            'branch' => '分公司角色',
            'member' => '会员角色',
        ];
    }
}
