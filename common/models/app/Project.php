<?php

namespace common\models\app;

use common\models\base\BaseModel;
use Yii;

/**
 * This is the model class for table "project".
 *
 * @property int $id
 * @property string $name 名称
 * @property string $desc 简介
 * @property int $area_id 面积
 * @property int $category_id 分类
 * @property int $city_id 城市
 * @property string $project_area 建筑面积
 * @property string $price_range 价格区间
 * @property string $contact 招商电话
 * @property string $address 项目地址
 * @property string $facility_ids 空间设施
 * @property string $service_facility 服务设施描述
 * @property string $work 办公详情
 * @property string $park 工区详情
 * @property string $append 配套详情
 * @property string $service 服务详情
 * @property string $vr_url VR链接
 * @property int $sort 排序
 * @property int $status 状态
 * @property int $created_at 创建时间
 * @property int $create_user 创建人
 * @property int $updated_at 修改时间
 * @property int $updated_user 修改人
 */
class Project extends BaseModel
{
    public $img;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'project';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['img','name', 'area_id', 'category_id', 'city_id', 'project_area', 'price_range', 'contact', 'address'], 'required'],
            [['area_id', 'category_id', 'city_id', 'sort', 'status', 'created_at', 'create_user', 'updated_at', 'updated_user'], 'integer'],
            [['work', 'park', 'append', 'service'], 'string'],
            [['name', 'project_area', 'price_range', 'address'], 'string', 'max' => 255],
            [['desc', 'service_facility', 'vr_url'], 'string', 'max' => 1023],
            [['contact'], 'string', 'max' => 50],
            [['img','facility_ids'],'safe']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'img' => '图片',
            'name' => '名称',
            'desc' => '简介',
            'area_id' => '面积',
            'category_id' => '分类',
            'city_id' => '城市',
            'project_area' => '建筑面积',
            'price_range' => '价格区间',
            'contact' => '招商电话',
            'address' => '项目地址',
            'facility_ids' => '空间设施',
            'service_facility' => '服务设施描述',
            'work' => '办公详情',
            'park' => '工区详情',
            'append' => '配套详情',
            'service' => '服务详情',
            'vr_url' => 'VR链接',
            'sort' => '排序',
            'status' => '状态',
            'created_at' => '创建时间',
            'create_user' => '创建人',
            'updated_at' => '修改时间',
            'updated_user' => '修改人',
        ];
    }
}
