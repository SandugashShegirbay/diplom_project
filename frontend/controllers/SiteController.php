<?php
namespace frontend\controllers;

use frontend\models\ResendVerificationEmailForm;
use frontend\models\VerifyEmailForm;
use Yii;
use yii\base\InvalidArgumentException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use frontend\models\Category;
use frontend\models\Spec;
use frontend\models\Regions;
use frontend\models\Univers;
use frontend\models\News;
use frontend\models\Spisok;
use frontend\models\Selected;
use common\models\User;
use yii\data\Pagination;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['get'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $category = Category::find()->all();
        $region = Regions::find()->all();
        $news = News::find()->limit(6)->orderBy(['id'=>SORT_DESC])->all();
        $i = 0;
        foreach ($news as $item) {
            $i++;
            $array[$i] = $item->id;
        }
        return $this->render('index',[
            'region'=>$region,
            'category'=>$category,
            'array' => $array,
        ]);
    }

    public function actionNews()
    {
        $news = News::find()->orderBy(['id'=>SORT_DESC])->all();
        return $this->render('news',['news'=>$news]);
    }

    public function actionNewfull($id)
    {
        $news = News::find()->where(['id'=>$id])->one();
        return $this->render('newfull',['news'=>$news]);
    }

    public function actionSpisok()
    {
        $spisok = Spisok::find()->one();
        return $this->render('spisok',['spisok'=>$spisok]);
    }

    public function actionGranty(){
        $cats = $_POST['cats'];
        $regs = $_POST['regs'];
        if($cats && $regs){
            $query = Univers::find()->where(['cat_id'=>$cats])->andwhere(['reg_id'=>$regs]);
        }else
        if($cats){
            $query = Univers::find()->where(['cat_id'=>$cats]);
        }else
        if($regs){
            $query = Univers::find()->where(['reg_id'=>$regs]);
        }else
        if(!$cats && !$regs){
            $query = Univers::find();
        }
        $cnt = $query->count();
        $count = $query->count();
        $pagination = new Pagination(['totalCount' => $count,'pageSize'=>10]);
        $univers = $query->offset($pagination->offset)
        ->limit($pagination->limit)
        ->orderBy(['id' => SORT_DESC])
        ->all();
        return $this->render('granty',[
            'univers'=>$univers,
            'cats'=>$cats,
            'regs'=>$regs,
            'cnt'=>$cnt,
            'pagination'=>$pagination,
        ]);
    }

    public function actionUniver(){
        $id = $_GET['id'];
        $univer = Univers::find()->where(['id'=>$id])->one();
        $region = Regions::find()->where(['id'=>$univer->reg_id])->one();
        $category = Category::find()->where(['id'=>$univer->cat_id])->one();
        $spec = Spec::find()->where(['id'=>$univer->spec_id])->one();
        return $this->render('univer',[
            'univer'=>$univer,
            'region'=>$region,
            'category'=>$category,
            'spec'=>$spec,
        ]);
    }

    public function actionSelected(){
        $id = $_POST['id'];
        $user_id = Yii::$app->user->id;
        $selected = Selected::find()->where(['univer_id'=>$id])->andwhere(['user_id'=>$user_id])->one();
        if($selected){
            return 1;
        }else{
            $selected = new Selected();
            $selected->univer_id = $id;
            $selected->user_id = $user_id;
            $selected->save(false);
            return 1;
        }
    }

    public function actionCabinet(){
        $user_id = Yii::$app->user->id;
        $query = Selected::find()->where(['user_id'=>$user_id]);
        $user = User::find()->where(['id'=>$user_id])->one();
        $count = $query->count();
        $pagination = new Pagination(['totalCount' => $count,'pageSize'=>10]);
        $selected = $query->offset($pagination->offset)
        ->limit($pagination->limit)
        ->orderBy(['id' => SORT_DESC])
        ->all();

        return $this->render('cabinet',[
            'selected'=>$selected,
            'user'=>$user,
            'pagination'=>$pagination,
        ]);
    }


    public function actionChangespec(){
        $id = $_POST['val'];
        if($id == 0){
            $spec = Spec::find()->all();
        }else{
            $spec = Spec::find()->where(['caf_id'=>$id])->all();
        }
        $html = '';
        $html .= '<option value="0">Выбрать все</option>';
        foreach ($spec as $item) {
            $html .= '<option value="'.$item->id.'">'.$item->name.'</option>';
        }
        return $html;
    }

    public function actionSetvariants(){
        $caf_id = $_POST['val'];
        $cat_id = $_POST['cat_id'];
        if($caf_id == 0){
            if($cat_id == 0){
                $univers = Univers::find()->all();  
            }else{
                $univers = Univers::find()->where(['cat_id'=>$cat_id])->all();  
            }
        }else{
            if($cat_id == 0){
                $univers = Univers::find()->where(['caf_id'=>$caf_id])->all();  
            }else{
                $univers = Univers::find()->where(['cat_id'=>$cat_id])->andwhere(['caf_id'=>$caf_id])->all();  
            }
        }
        $count = count($univers);
        return $this->renderPartial('unihtml',['univers'=>$univers,'count'=>$count]);
    }

    public function actionSetvarcat(){
        $cat_id = $_POST['id'];
        if($cat_id == 0){
            $univers = Univers::find()->all();
        }else{
            $univers = Univers::find()->where(['cat_id'=>$cat_id])->all();
        }
        $count = count($univers);
        return $this->renderPartial('unihtml',['univers'=>$univers,'count'=>$count]);
    }

    public function actionSetvarspec(){
        $spec_id = $_POST['spec_id'];
        $cat_id = $_POST['cat_id'];
        $caf_id = $_POST['caf_id'];

        if($spec_id == 0){
            if($caf_id == 0){
                if($cat_id == 0){
                    $univers = Univers::find()->all();
                }else{
                    $univers = Univers::find()->where(['cat_id'=>$cat_id])->all();
                }
            }else{
                if($cat_id == 0){
                    $univers = Univers::find()->where(['caf_id'=>$caf_id])->all();
                }else{
                    $univers = Univers::find()->where(['cat_id'=>$cat_id])->andwhere(['caf_id'=>$caf_id])->all();
                }
            }
        }else{
            if($caf_id == 0){
                if($cat_id == 0){
                    $univers = Univers::find()->where(['spec_id'=>$spec_id])->all();
                }else{
                    $univers = Univers::find()->where(['cat_id'=>$cat_id])->andwhere(['spec_id'=>$spec_id])->all();
                }
            }else{
                if($cat_id == 0){
                    $univers = Univers::find()->where(['caf_id'=>$caf_id])->andwhere(['spec_id'=>$spec_id])->all();
                }else{
                    $univers = Univers::find()->where(['caf_id'=>$caf_id])->andwhere(['spec_id'=>$spec_id])->andwhere(['cat_id'=>$cat_id])->all();
                }
            }
        }
        $count = count($univers);
        return $this->renderPartial('unihtml',['univers'=>$univers,'count'=>$count]);
    }

    public function actionSetvarregion(){
        $spec_id = $_POST['spec_id'];
        $cat_id = $_POST['cat_id'];
        $caf_id = $_POST['caf_id'];
        $reg_id = $_POST['reg_id'];
        $price_ot = $_POST['price_ot'];
        $price_do = $_POST['price_do'];
        if($reg_id == 0){
            if($spec_id == 0){
                if($caf_id == 0){
                    if($cat_id == 0){
                        $univers = Univers::find()->all();
                    }else{
                        $univers = Univers::find()->where(['cat_id'=>$cat_id])->all();
                    }
                }else{
                    if($cat_id == 0){
                        $univers = Univers::find()->where(['caf_id'=>$caf_id])->all();
                    }else{
                        $univers = Univers::find()->where(['caf_id'=>$caf_id])->andwhere(['cat_id'=>$cat_id])->all();
                    }
                }
            }else{
                if($caf_id == 0){
                    if($cat_id == 0){
                        $univers = Univers::find()->where(['spec_id'=>$spec_id])->all();
                    }else{
                        $univers = Univers::find()->where(['spec_id'=>$spec_id])->andwhere(['cat_id'=>$cat_id])->all();
                    }
                }else{
                    if($cat_id == 0){
                        $univers = Univers::find()->where(['spec_id'=>$spec_id])->andwhere(['caf_id'=>$caf_id])->all();
                    }else{
                        $univers = Univers::find()->where(['spec_id'=>$spec_id])->andwhere(['caf_id'=>$caf_id])->andwhere(['cat_id'=>$cat_id])->all();
                    }
                }
            }
        }else{
            if($spec_id == 0){
                if($caf_id == 0){
                    if($cat_id == 0){
                        $univers = Univers::find()->where(['reg_id'=>$reg_id])->all();
                    }else{
                        $univers = Univers::find()->where(['reg_id'=>$reg_id])->andwhere(['cat_id'=>$cat_id])->all();
                    }
                }else{
                    if($cat_id == 0){
                        $univers = Univers::find()->where(['reg_id'=>$reg_id])->andwhere(['caf_id'=>$caf_id])->all();
                    }else{
                        $univers = Univers::find()->where(['reg_id'=>$reg_id])->andwhere(['caf_id'=>$caf_id])->andwhere(['cat_id'=>$cat_id])->all();
                    }
                }    
            }else{
                if($caf_id == 0){
                    if($cat_id == 0){
                        $univers = Univers::find()->where(['reg_id'=>$reg_id])->andwhere(['spec_id'=>$spec_id])->all();
                    }else{
                        $univers = Univers::find()->where(['reg_id'=>$reg_id])->andwhere(['spec_id'=>$spec_id])->andwhere(['cat_id'=>$cat_id])->all();
                    }
                }else{
                    if($cat_id == 0){
                        $univers = Univers::find()->where(['reg_id'=>$reg_id])->andwhere(['spec_id'=>$spec_id])->andwhere(['caf_id'=>$caf_id])->all();
                    }else{
                        $univers = Univers::find()->where(['reg_id'=>$reg_id])->andwhere(['spec_id'=>$spec_id])->andwhere(['caf_id'=>$caf_id])->andwhere(['cat_id'=>$cat_id])->all();
                    }
                }
            }
        }
        $count = count($univers);
        return $this->renderPartial('unihtml',[
            'univers'=>$univers,
            'count'=>$count,
            'price_ot'=>$price_ot,
            'price_do'=>$price_do,
        ]);
    }

    public function actionUniverdelete($id){
        $selected = Selected::find()->where(['id'=>$id])->one();
        $selected->delete();
        return $this->redirect('cabinet');
    }

    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            $model->password = '';

            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

       
    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post()) && $model->signup()) {
            /*Yii::$app->session->setFlash('success', 'Thank you for registration. Please check your inbox for verification email.');*/
            $loginform = new LoginForm();
            $loginform->username = $model->username;
            $loginform->password = $model->password;
            $loginform->login();
            return $this->goHome();
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

   
    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for the provided email address.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidArgumentException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }

}
