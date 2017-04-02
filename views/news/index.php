<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use kartik\form\ActiveForm;
use yii\widgets\ListView;
use kop\y2sp\ScrollPager;

$this->title = 'News';
$this->registerCss("
    .input-group-addon {border-radius: 0 20px 20px 0; border: none; background: #fff;}
");
?>
<div class="news-index logo-black wrap-padding-top">
    
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="search-form">
                    <?php $form = ActiveForm::begin(['method' => 'get']) ?>

                    <?= $form->field($model, 'search', [
                        'addon' => ['append' => ['content'=>'<i class="cyan fa fa-search"></i>']],
                    ])->textInput(['placeholder' => 'Search field', 'style' => 'border-radius:20px 0 0 20px; border:none;'])->label(false) ?>

                    <?php ActiveForm::end() ?>
                </div>
                <br />

                <div>
                    <div class="panel panel-default">
                        <div class="panel-heading">Stay Connected</div>
                        <div class="panel-body">
                            <p>
                                <i class="fa fa-facebook-official"></i> &nbsp; 
                                <?= Html::a('Facebook', '#', ['class' => 'black']) ?>
                            </p>
                            <p>
                                <i class="fa fa-youtube"></i> &nbsp; 
                                <?= Html::a('Youtube', '#', ['class' => 'black']) ?>
                            </p>
                            <p>
                                <i class="fa fa-instagram"></i> &nbsp; 
                                <?= Html::a('Instagram', '#', ['class' => 'black']) ?>
                            </p>
                            <p>
                                <i class="fa fa-twitter"></i> &nbsp; 
                                <?= Html::a('Twitter', '#', ['class' => 'black']) ?>
                            </p>
                            <p>
                                <i class="fa fa-google-plus-official"></i> &nbsp; 
                                <?= Html::a('Google+', '#', ['class' => 'black']) ?>
                            </p>
                            <p>
                                <i class="fa fa-wordpress"></i> &nbsp; 
                                <?= Html::a('Wordpress', '#', ['class' => 'black']) ?>
                            </p>
                        </div>
                    </div>
                </div>
                <br />

                <div>
                    <div class="panel panel-default">
                        <div class="panel-heading">User Navigation</div>
                        <div class="panel-body">
                            <?php if (Yii::$app->user->isGuest): ?>
                                <p>
                                    <i class="fa fa-sign-in"></i> &nbsp; 
                                    <?= Html::a('Log In', ['/site/login'], ['class' => 'black']) ?>
                                </p>
                            <?php else: ?>
                                <p>
                                    <i class="fa fa-newspaper-o"></i> &nbsp; 
                                    <?= Html::a('Create News', ['/news/create'], ['class' => 'black']) ?>
                                </p>
                                <p>
                                    <i class="fa fa-sign-out"></i> &nbsp; 
                                    <?= Html::a('Sign Out ('.Yii::$app->user->identity->username.')', ['/site/logout'], [
                                        'class' => 'black',
                                        'data' => [
                                            'method' => 'post'
                                        ]
                                    ]) ?>
                                </p>
                            <?php endif ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <?= ListView::widget([
                    'dataProvider' => $models,
                    'summary' => '',
                    'itemView' => function ($model, $key, $index, $widget) {
                        return $this->render('_list-view', ['model' => $model]);
                    },
                    'layout' => '{items}<div class="text-center">{pager}</div>',
                    'itemOptions' => ['class' => 'item'],
                    'pager' => [
                        'class' => ScrollPager::className(),
                        'noneLeftText' => ''
                    ]
                ]) ?>
            </div>
        </div>
    </div>
</div>