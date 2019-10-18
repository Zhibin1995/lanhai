<?php

use common\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\app\Project */
/* @var $form yii\widgets\ActiveForm */

$this->title = 'Project';
$this->params['breadcrumbs'][] = ['label' => 'Projects', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="row">
    <div class="col-lg-12">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">基本信息</h3>
            </div>
            <div class="box-body">
                <?php $form = ActiveForm::begin([
                    'fieldConfig' => [
                        'template' => "<div class='col-sm-2 text-right'>{label}</div><div class='col-sm-10'>{input}\n{hint}\n{error}</div>",
                    ],
                ]); ?>
                <div class="col-sm-12">
                    <?= $form->field($model, 'img')->widget(\common\widgets\webuploader\Files::class, [
                        'type' => 'images',
                        'theme' => 'default',
                        'themeConfig' => [],
                        'config' => [
                            // 可设置自己的上传地址, 不设置则默认地址
                            // 'server' => '',
                            'pick' => [
                                'multiple' => true,
                            ],
                        ]
                    ]); ?>
                    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
                    <?= $form->field($model, 'desc')->textarea() ?>
                    <?= $form->field($model, 'area_id')->dropDownList(\common\models\app\Area::getSelectOptions()) ?>
                    <?= $form->field($model, 'category_id')->dropDownList(\common\models\app\Category::getSelectOptions()) ?>
                    <?= $form->field($model, 'city_id')->dropDownList(\common\models\app\City::getSelectOptions()) ?>
                    <?= $form->field($model, 'project_area')->textInput(['maxlength' => true]) ?>
                    <?= $form->field($model, 'price_range')->textInput(['maxlength' => true]) ?>
                    <?= $form->field($model, 'contact')->textInput(['maxlength' => true]) ?>
                    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>
                    <?= $form->field($model, 'facility_ids')->checkboxList(\common\models\app\Facility::getSelectOptions()) ?>
                    <?= $form->field($model, 'service_facility')->textarea() ?>
                    <?= $form->field($model, 'work')->widget(\common\widgets\ueditor\UEditor::class, []) ?>
                    <?= $form->field($model, 'park')->widget(\common\widgets\ueditor\UEditor::class, []) ?>
                    <?= $form->field($model, 'append')->widget(\common\widgets\ueditor\UEditor::class, []) ?>
                    <?= $form->field($model, 'service')->widget(\common\widgets\ueditor\UEditor::class, []) ?>
                    <?= $form->field($model, 'vr_url')->textInput(['maxlength' => true]) ?>
                    <?= $form->field($model, 'sort')->textInput() ?>
                </div>
                <div class="form-group">
                    <div class="col-sm-12 text-center">
                        <button class="btn btn-primary" type="submit">保存</button>
                        <span class="btn btn-white" onclick="history.go(-1)">返回</span>
                    </div>
                </div>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>
