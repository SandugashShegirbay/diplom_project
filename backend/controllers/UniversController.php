<?php

namespace backend\controllers;

use Yii;
use frontend\models\Univers;
use backend\models\UniversSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use frontend\models\Category;
use frontend\models\Spec;
use frontend\models\Regions;
use frontend\models\Cafedra;

/**
 * UniversController implements the CRUD actions for Univers model.
 */
class UniversController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Univers models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new UniversSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionSetspec(){
        $caf_id = $_POST['caf_id'];
        $spec = Spec::find()->where(['caf_id'=>$caf_id])->all();
        $html = '';
        foreach ($spec as $item) {
            $html .= '<option value="'.$item->id.'">'.$item->name.'</option>';
        }
        return $html;
    }

    /**
     * Displays a single Univers model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Univers model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Univers();

        if ($model->load(Yii::$app->request->post())) {
            $model->file_img = UploadedFile::getInstance($model, 'file_img');  
            if($model->file_img){
              $image1path = 'univers/';
              $model->img = $image1path.time().'.'.$model->file_img->extension;
              $model->file_img->saveAs($model->img, false);
            }
            if($model->save(false)){
                return $this->redirect(['view', 'id' => $model->id]);
            }
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Univers model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
			$model->file_img = UploadedFile::getInstance($model, 'file_img');  
            if($model->file_img){
              $image1path = 'univers/';
              $model->img = $image1path.time().'.'.$model->file_img->extension;
              $model->file_img->saveAs($model->img, false);
            }
            if($model->update(false)){
                return $this->redirect(['view', 'id' => $model->id]);
            }
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Univers model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Univers model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Univers the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Univers::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
