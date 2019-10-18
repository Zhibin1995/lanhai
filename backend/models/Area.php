<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "area".
 *
 * @property int $id
 * @property string $name 名称
 * @property int $sort 排序
 * @property int $status 状态
 * @property int $created_at 创建时间
 * @property int $create_user 创建人
 * @property int $updated_at 修改时间
 * @property int $updated_user 修改人
 */
class Area extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'area';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['sort', 'status', 'created_at', 'create_user', 'updated_at', 'updated_user'], 'integer'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => '名称',
            'sort' => '排序',
            'status' => '状态',
            'created_at' => '创建时间',
            'create_user' => '创建人',
            'updated_at' => '修改时间',
            'updated_user' => '修改人',
        ];
    }
}
