<?php

use common\helpers\Html;
use common\helpers\Url;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Projects';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title"><?= Html::encode($this->title) ?></h3>
                <div class="box-tools">
                    <?= Html::create(['edit']) ?>
                </div>
            </div>
            <div class="box-body table-responsive">
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'tableOptions' => ['class' => 'table table-hover'],
        'columns' => [
            [
                'class' => 'yii\grid\SerialColumn',
                'visible' => false,
            ],

            'id',
            'name',
            //'desc',
            [
                'attribute' => 'area_id',
                'value' => function ($model) {
                    return \common\models\app\Area::find()->select('name')->where(['id' => $model->area_id])->scalar();
                }
            ],
            [
                'attribute' => 'category_id',
                'value' => function ($model) {
                    return \common\models\app\Category::find()->select('name')->where(['id' => $model->category_id])->scalar();
                }
            ],
            [
                'attribute' => 'city_id',
                'value' => function ($model) {
                    return \common\models\app\City::find()->select('name')->where(['id' => $model->city_id])->scalar();
                }
            ],
            //'project_area',
            //'price_range',
            //'contact',
            'address',
            //'facility_ids',
            //'service_facility',
            //'work:ntext',
            //'park:ntext',
            //'append:ntext',
            //'service:ntext',
            //'vr_url:url',
            'sort',
//            'status',
            'created_at:datetime',
            //'create_user',
            //'updated_at',
            //'updated_user',
            [
                'class' => 'yii\grid\ActionColumn',
                'header' => '操作',
                'template' => '{room} {service_facility} {people} {edit} {status} {delete}',
                'buttons' => [
                    'room' => function($url, $model, $key){
                        return Html::a('可租房源','/backend/room?project_id='.$model->id,['class' => 'btn btn-primary btn-sm']);
                    },
                    'service_facility' => function($url, $model, $key){
                        return Html::a('服务设施','/backend/service-facility?project_id='.$model->id,['class' => 'btn btn-primary btn-sm']);
                    },
                    'people' => function($url, $model, $key){
                        return Html::linkButton(['/people/index', 'project_id' =>$model->id],'招商人员');
                    },
                    'edit' => function($url, $model, $key){
                        return Html::edit(['edit', 'id' => $model->id]);
                    },
                    'status' => function($url, $model, $key){
                        return Html::status($model['status']);
                    },
                    'delete' => function($url, $model, $key){
                        return Html::delete(['delete', 'id' => $model->id]);
                    },
                ]
            ]
    ]
    ]); ?>
            </div>
        </div>
    </div>
</div>
