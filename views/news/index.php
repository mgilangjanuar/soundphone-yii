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
            </div>
            <div class="col-sm-8">
                <div class="panel panel-primary">
                    <div class="panel-heading panel-img">
                        <?= Html::img('@web/web/img/newspic.png', ['class' => 'img-responsive img-full']) ?>
                    </div>
                    <div class="panel-body">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua.
                    </div>
                    <div class="panel-footer grey">
                        <p class="pull-right">
                            <span class="cyan"><i class="fa fa-comment"></i> &nbsp; Comments</span>
                            &nbsp; &nbsp; &nbsp;
                            10
                        </p>
                        <p class="">
                            <i class="fa fa-clock-o"></i> Feb 10, 2017
                        </p>
                    </div>
                </div>
                <br />
                
                <div class="panel panel-primary">
                    <div class="panel-heading panel-img">
                        <?= Html::img('@web/web/img/without-text.png', ['class' => 'img-responsive img-full']) ?>
                    </div>
                    <div class="panel-body">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua.
                    </div>
                    <div class="panel-footer grey">
                        <p class="pull-right">
                            <span class="cyan"><i class="fa fa-comment"></i> &nbsp; Comments</span>
                            &nbsp; &nbsp; &nbsp;
                            10
                        </p>
                        <p class="">
                            <i class="fa fa-clock-o"></i> Feb 10, 2017
                        </p>
                    </div>
                </div>
                <!--<?= ListView::widget([
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
                ]) ?>-->
            </div>
        </div>
    </div>
</div>