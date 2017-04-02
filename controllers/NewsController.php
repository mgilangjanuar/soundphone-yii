<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use yii\web\NotFoundHttpException;
use app\models\Post;
use app\models\SearchPostForm;
use yii\db\Query;
use yii\data\ActiveDataProvider;

class NewsController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['create', 'update', 'delete'],
                'rules' => [
                    [
                        'actions' => ['create', 'update', 'delete'],
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

    public function actionIndex($id = null)
    {
        $model = new SearchPostForm;
        if ($model->load(Yii::$app->request->get())) {
            $id = null;
            $query = Post::find()
                ->where(['like', 'title', $model->search])
                ->orWhere(['like', 'content', $model->search])
                ->orderBy('created_at desc');
        } elseif ($id) {
            $query = Post::find()->where(['id' => $id]);
        } else {
            $query = Post::find()->orderBy('created_at desc');
        }
        $models = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 4
            ]
        ]);
        return $this->render('index', [
            'models' => $models,
            'model' => $model
        ]);
    }

    public function actionCreate()
    {
        $model = new Post;
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index', 'id' => $model->id]);
        }
        return $this->render('create', [
            'model' => $model
        ]);
    }

    public function actionUpdate($id)
    {
        $model = $this->findPost($id);
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index', 'id' => $model->id]);
        }
        return $this->render('update', [
            'model' => $model
        ]);
    }

    public function actionDelete($id)
    {
        $this->findPost($id)->delete();
        return $this->redirect(['index']);
    }

    private function findPost($id)
    {
        if ($model = Post::findOne($id)) {
            return $model;
        }
        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
