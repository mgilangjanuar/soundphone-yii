<?php
use yii\helpers\Html;
use yii\helpers\Url;
use kartik\select2\Select2;
use yii2mod\google\maps\markers\GoogleMaps;

$this->title = 'Service Center';
?>

<div class="site-service-center">

    <?= Html::img('@web/web/img/banner 2.png', ['class' => 'img-responsive img-center']) ?>
    
    <div class="filter-form">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-sm-offset-4">
                    <form method="get">
                        <?= Select2::widget([
                            'name' => 'state',
                            'value' => Yii::$app->request->get('state'),
                            'data' => $states,
                            'options' => [
                                'placeholder' => 'City'
                            ],
                        ]) ?>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <br /><br /><br />
    <div class="container">
        <?= GoogleMaps::widget([
            'userLocations' => $locations,
        ]) ?>
    </div>

    <br /><br /><br />
    <div class="container">
        <?php foreach ($models as $model): ?>
            <div class="well well-sm">
                <div class="row">
                    <div class="col-sm-9">
                        <div class="pull-left">
                            <?= Html::img('@web/web/img/noun_33230_cc copy 2.png', ['style' => 'padding:9px 30px']) ?>
                        </div>
                        <div class="cyan">
                            <h4><?= $model->state ?></h4>
                            <p>
                                <?= $model->address ?>
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <p>
                            <?= Html::a(' &nbsp; &nbsp; &nbsp; Detail &nbsp; &nbsp; &nbsp; ', ['/site/service-center', 'state' => $model->state], [
                                'class' => 'btn btn-secondary',
                                'style' => 'margin:14px'
                            ]) ?>
                        </p>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>