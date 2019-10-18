<?php

namespace common\models\app;

use common\models\base\BaseModel;
use Yii;

/**
 * This is the model class for table "people".
 *
 * @property int $id
 * @property int $project_id 项目
 * @property string $name 姓名
 * @property string $phone 手机号码
 * @property string $photo 照片
 * @property int $sort 排序
 * @property int $status 状态
 * @property int $created_at 创建时间
 * @property int $create_user 创建人
 * @property int $updated_at 修改时间
 * @property int $updated_user 修改人
 */
class People extends BaseModel
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'people';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['project_id', 'name', 'phone', 'photo'], 'required'],
            [['project_id', 'sort', 'status', 'created_at', 'create_user', 'updated_at', 'updated_user'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['phone'], 'string', 'max' => 20],
            [['photo'], 'string', 'max' => 1023],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'project_id' => '项目',
            'name' => '姓名',
            'phone' => '手机号码',
            'photo' => '照片',
            'sort' => '排序',
            'status' => '状态',
            'created_at' => '创建时间',
            'create_user' => '创建人',
            'updated_at' => '修改时间',
            'updated_user' => '修改人',
        ];
    }
}
