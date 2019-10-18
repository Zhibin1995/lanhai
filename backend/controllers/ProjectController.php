<?php

namespace backend\controllers;

use common\models\app\ProjectImg;
use Yii;
use common\models\app\Project;
use common\components\Curd;
use common\models\base\SearchModel;
use backend\controllers\BaseController;

/**
* Project
*
* Class ProjectController
* @package backend\controllers
*/
class ProjectController extends BaseController
{
    use Curd;

    /**
    * @var Project
    */
    public $modelClass = Project::class;


    /**
    * 首页
    *
    * @return string
    * @throws \yii\web\NotFoundHttpException
    */
    public function actionIndex()
    {
        $searchModel = new SearchModel([
            'model' => $this->modelClass,
            'scenario' => 'default',
            'partialMatchAttributes' => [], // 模糊查询
            'defaultOrder' => [
                'id' => SORT_DESC
            ],
            'pageSize' => $this->pageSize
        ]);

        $dataProvider = $searchModel
            ->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
            'searchModel' => $searchModel,
        ]);
    }
    /**
     * ajax编辑/创建
     *
     * @return mixed|string|\yii\web\Response
     * @throws \yii\base\ExitException
     */
    public function actionAjaxEdit()
    {
        $id = Yii::$app->request->get('id');
        $model = $this->findModel($id);

        // ajax 校验
        $this->activeFormValidate($model);
        if ($model->load(Yii::$app->request->post())) {
            $model->facility_ids = implode(',',$model->facility_ids);
            return $model->save()
                ? $this->redirect(['index'])
                : $this->message($this->getError($model), $this->redirect(['index']), 'error');

        }

        return $this->renderAjax($this->action->id, [
            'model' => $model,
        ]);
    }
    /**
     * 编辑/创建
     *
     * @return mixed
     */
    public function actionEdit()
    {
        $id = Yii::$app->request->get('id', null);
        $model = $this->findModel($id);
        if ($model->load(Yii::$app->request->post())) {
            $model->facility_ids = implode(',',$model->facility_ids);
            $model->save();
            foreach ($model->img as $key=>$item){
                $img = new ProjectImg();
                $img->project_id = $model->id;
                $img->img_url = $item;
                $img->sort = $key;
                $img->created_at = time();
                $img->save();
            }
            return $this->redirect(['index']);

        }
        return $this->render($this->action->id, [
            'model' => $model,
        ]);
    }
}
