<?php
/**
 * lanhai
 * PhpStorm
 * @author zhibin
 * @date 2019-10-18
 * Class LanhaiController.php
 */

namespace api\modules\v1\controllers;
use common\models\app\Area;
use common\models\app\Category;
use common\models\app\City;
use common\models\app\Facility;
use common\models\app\People;
use common\models\app\Room;
use common\models\app\ServiceFacility;
use Yii;
use api\controllers\OnAuthController;
use common\models\app\Project;
use common\models\app\ProjectImg;

class LanhaiController extends OnAuthController
{
    public $modelClass = Project::class;

    /**
     * 不用进行登录验证的方法
     * 例如： ['index', 'update', 'create', 'view', 'delete']
     * 默认全部需要验证
     *
     * @var array
     */
    protected $optional = ['detail', 'list', 'option'];
    public function actionList(){
        $post = Yii::$app->request->post();
        $page = $post['page'] ?? 1;
        $size = $post['size'] ?? 10;
        $offset = ($page -1) * 10;
        $category = $post['category'] ??'';
        $city = $post['city']??'';
        $area = $post['area']??'';
        $query = $this->modelClass::find();
        $query->andWhere(['status' => 1]);
        if($category){
            $query->andWhere(['category_id' => $category]);
        }
        if($city){
            $query->andWhere(['city_id' => $city]);
        }
        if($area){
            $query->andWhere(['area_id' => $area]);
        }
        $query->select([
            'id', 'name','address','contact'
        ]);
        $query->offset($offset);
        $query->limit($size);
        $query->asArray();
        $list = $query->all();


        foreach ($list as $key => $value){
            $list[$key]['img'] = ProjectImg::find()->where(['project_id' => $value['id']])->select('img_url')->scalar();
        }
        return $list;
    }
    public function actionDetail(){
        $id = Yii::$app->request->post('id') ?? 0;
        if($id){
            $model = $this->modelClass::find()
                ->where(['id' => $id])
                ->asArray()
                ->one();
            $model['img'] = ProjectImg::find()->where(['project_id' => $id])->select('img_url')->column();
            $model['room'] = Room::find()->where(['project_id' => $id,'status' => 1])->select('name,img_url')->asArray()->all();
            $model['people'] = People::find()->where(['project_id' => $id,'status' => 1])->select('name,photo,phone')->asArray()->all();
            $model['service_facility_arr'] = ServiceFacility::find()->where(['project_id' => $id,'status' => 1])->select('name,img_url')->asArray()->all();
            $model['tags'] = Facility::find()->andWhere(['in','id',explode(',',$model['facility_ids'])])->andWhere(['status' => 1])->select('name,icon')->asArray()->all();
            return $model;
        }else{
            return [];
        }
    }
    public function actionOption(){
        $list['category'] = Category::find()->where(['status' =>1])->select('id,name')->column();
        $list['area'] = Area::find()->where(['status' =>1])->select('id,name')->column();
        $list['city'] = City::find()->where(['status' =>1])->select('id,name')->column();
        return $list;
    }

}