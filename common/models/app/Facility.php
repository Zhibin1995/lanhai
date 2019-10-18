<?php

namespace common\models\app;

use common\models\base\BaseModel;
use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "facility".
 *
 * @property int $id
 * @property string $icon 图标
 * @property string $name 名称
 * @property int $sort 排序
 * @property int $status 状态
 * @property int $created_at 创建时间
 * @property int $create_user 创建人
 * @property int $updated_at 修改时间
 * @property int $updated_user 修改人
 */
class Facility extends BaseModel
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'facility';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['icon', 'name'], 'required'],
            [['sort', 'status', 'created_at', 'create_user', 'updated_at', 'updated_user'], 'integer'],
            [['icon'], 'string', 'max' => 1023],
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
            'icon' => '图标',
            'name' => '名称',
            'sort' => '排序',
            'status' => '状态',
            'created_at' => '创建时间',
            'create_user' => '创建人',
            'updated_at' => '修改时间',
            'updated_user' => '修改人',
        ];
    }
    public static function getSelectOptions()
    {
        return ArrayHelper::map(self::find()->all(), 'id', 'name');
    }
}
