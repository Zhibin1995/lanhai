<?php

namespace backend\controllers;

use Yii;
use common\models\app\Area;
use common\components\Curd;
use common\models\base\SearchModel;
use backend\controllers\BaseController;

/**
* area
*
* Class AreaController
* @package backend\controllers
*/
class AreaController extends BaseController
{
    use Curd;

    /**
    * @var area
    */
    public $modelClass = Area::class;


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
}
