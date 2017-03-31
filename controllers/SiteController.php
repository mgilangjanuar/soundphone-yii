<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\ServiceCenter;
use app\models\Store;

class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
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
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
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
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionAboutUs()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');
            return $this->refresh();
        }
        return $this->render('about-us', [
            'model' => $model,
        ]);
    }

    public function actionProduct()
    {
        return $this->render('product');
    }

    public function actionProductDetail($id)
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');
            return $this->refresh();
        }
        if ($id == 'j2') {
            return $this->render('product-j2', [
                'model' => $model
            ]);
        } elseif ($id == 's1') {
            return $this->render('product-s1', [
                'model' => $model
            ]);
        } elseif ($id == 's2') {
            return $this->render('product-s2', [
                'model' => $model
            ]);
        }
    }

    public function actionStore()
    {
        return $this->render('store', [
            'models' => Store::find()->all()
        ]);
    }

    public function actionServiceCenter()
    {
        $models = ServiceCenter::find()->all();
        if ($state = Yii::$app->request->get('state')) {
            $models = ServiceCenter::find()->where(['state' => $state])->all();
        }

        return $this->render('service-center', [
            'states' => ServiceCenter::getDataState(),
            'locations' => ServiceCenter::getLocations(Yii::$app->request->get('state')),
            'models' => $models
        ]);
    }

    public function actionFaq()
    {
        return $this->render('faq');
    }

    public function actionCreatePass($pass)
    {
        echo Yii::$app->getSecurity()->generatePasswordHash($pass);
    }
}
