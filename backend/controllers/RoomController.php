<?php

namespace backend\controllers;

use Yii;
use common\models\app\Room;
use common\components\Curd;
use common\models\base\SearchModel;
use backend\controllers\BaseController;

/**
* Room
*
* Class RoomController
* @package backend\controllers
*/
class RoomController extends BaseController
{
    use Curd;

    /**
    * @var Room
    */
    public $modelClass = Room::class;


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
        $dataProvider->query->andWhere(['project_id' => (int)Yii::$app->request->get('project_id')]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
            'searchModel' => $searchModel,
            'project_id' => (int)Yii::$app->request->get('project_id')
        ]);
    }
}
