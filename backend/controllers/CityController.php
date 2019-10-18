<?php

namespace backend\controllers;

use Yii;
use common\models\app\City;
use common\components\Curd;
use common\models\base\SearchModel;
use backend\controllers\BaseController;

/**
* City
*
* Class CityController
* @package backend\controllers
*/
class CityController extends BaseController
{
    use Curd;

    /**
    * @var City
    */
    public $modelClass = City::class;


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
