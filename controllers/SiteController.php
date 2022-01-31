<?php
namespace app\controllers;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Properties;
use app\models\UploadForm;
use yii\web\UploadedFile;
use app\models\Images;
use app\models\PropertiesImage;

class SiteController extends Controller {
    /**
     * @inheritdoc
     */
    public function behaviors() {
        return['access' =>['class' => AccessControl :: className(), 'only' =>['logout'], 'rules' =>[['actions' =>['logout'], 'allow' => true, 'roles' =>['@'],],],], 'verbs' =>['class' => VerbFilter :: className(), 'actions' =>['logout' =>['post'],],],];
    }

    /**
     * @inheritdoc
     */
    public function actions() {
        return['error' =>['class' => 'yii\web\ErrorAction',], 'captcha' =>['class' => 'yii\captcha\CaptchaAction', 'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,],];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex() {
        return $this->render('index');
    }

    public function randomkeys($length) {
        $key = "";
        $pattern = '1234567890';
        for ($i = 0; $i < $length; $i++) {
            $key .= $pattern {
                mt_rand(0, 9)
                }; //生成php随机数
        }
        return $key;
    }

    //New custom function for actionAddproperty
    public function actionAddproperty() {
        $propertiesModel = new Properties();
        $imagesModel = new Images();
        $propertiesImageModel = new PropertiesImage();

       // $imagesModel->load(Yii :: $app->request->post());

        if ($propertiesModel->load(Yii :: $app->request->post())) {
            if ($propertiesModel->validate()) {
                $file = UploadedFile :: getInstance($imagesModel, 'ImagePath');
                $path = '/web/users/t7187321/yii2/basic/uploads/' . $file->baseName . '.' . $file->extension;
                $propertiesModel->Created = date("Y-m-d");
                $imagesModel->ImagePath = $path;
                $imagesModel->Created = date("Y-m-d");
                $propertiesModel->save();
                $imagesModel->save();
                $file->saveAs($path);
                $propertiesId = $propertiesModel->getPrimaryKey();
                $imagesId = $imagesModel->getPrimaryKey();
                $propertiesImageModel->PropertiesID = $propertiesId;
                $propertiesImageModel->ImagesID = $imagesId ;
                $propertiesImageModel->save();

                
                return $this->redirect(array('properties/index'));
            }
        }

        return $this->render('addproperty',['model' => $propertiesModel, 'model2' => $imagesModel,]);
    } //close actionAddproperty

    public function actionUpload() {
        $model = new UploadForm();

        if ($model->load(Yii :: $app->request->post())) {
            if ($model->validate()) {
                // form inputs are valid, do something here
                $model->file = UploadedFile :: getInstance($model, 'file');
                if ($model->file && $model->validate()) {
                    $model->file->saveAs('uploads/' . $model->file->baseName . '.' . $model->file->extension);
                }

            }
        }

        return $this->render('upload',['model' => $model]);

    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin() {
        if (!Yii :: $app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii :: $app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login',['model' => $model,]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout() {
        Yii :: $app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact() {
        $model = new ContactForm();
        if ($model->load(Yii :: $app->request->post()) && $model->contact(Yii :: $app->params['adminEmail'])) {
            Yii :: $app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact',['model' => $model,]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout() {
        return $this->render('about');
    }
}