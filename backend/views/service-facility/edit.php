<?php

use common\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\app\ServiceFacility */
/* @var $form yii\widgets\ActiveForm */

$this->title = 'Service Facility';
$this->params['breadcrumbs'][] = ['label' => 'Service Facilities', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
if(Yii::$app->request->get('project_id')){
    $model->project_id = Yii::$app->request->get('project_id');

}

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
                    <?= $form->field($model, 'project_id')->hiddenInput()->label(false) ?>
                    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
                    <?= $form->field($model, 'img_url')->widget(\common\widgets\webuploader\Files::class, [
                            'type' => 'images',
                            'theme' => 'default',
                            'themeConfig' => [],
                            'config' => [
                                // 可设置自己的上传地址, 不设置则默认地址
                                // 'server' => '',
                                'pick' => [
                                    'multiple' => false,
                                ],
                            ]
                    ]); ?>
                    <div class="form-group field-facility-name required has-error">
                        <div class="col-sm-12  col-sm-offset-2"><label class="control-label" for="facility-icon">图片尺寸200*250</label></div>
                    </div>
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
