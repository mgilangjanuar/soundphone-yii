<?php
use yii\helpers\Html;
use yii\helpers\Url;
use kartik\select2\Select2;
use kartik\form\ActiveForm;
use yii2mod\google\maps\markers\GoogleMaps;

$this->title = 'Store';
$this->registerCss("
    .input-group-addon {border-radius: 0 20px 20px 0; border: none; background: #fff;}
");
?>

<div class="site-store">

    <?= Html::img('@web/web/img/banner 3.png', ['class' => 'img-responsive img-center img-full']) ?>

    <div class="filter-form">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-sm-offset-4">
                    <?php $form = ActiveForm::begin(['method' => 'get']) ?>

                    <?= $form->field($model, 'search', [
                        'addon' => ['append' => ['content'=>'<i class="cyan fa fa-search"></i>']],
                    ])->textInput(['placeholder' => 'Search field', 'style' => 'border-radius:20px 0 0 20px; border:none;'])->label(false) ?>

                    <?php ActiveForm::end() ?>
                </div>
            </div>
        </div>
    </div>

    <br /><br /><br />
    <div class="container text-center">
        Filter by City: &nbsp; &nbsp;
        <?= Html::a('All &nbsp <i class="fa fa-times"></i>', ['/site/store'], ['style' => 'margin:3px', 'class' => ($model->state ? 'btn btn-flat btn-secondary' : 'btn btn-flat btn-alternate')]) ?>
        <?php foreach ($states as $state): ?>
            <?= Html::a($state, ['/site/store', 'SearchStoreForm[state]' => $state], ['style' => 'margin:3px', 'class' => ($model->state == $state ? 'btn btn-flat btn-alternate' : 'btn btn-flat btn-secondary')]) ?>
        <?php endforeach ?>
    </div>

    <br /><br /><br />
    <div class="container">
        <?= GoogleMaps::widget([
            'userLocations' => $locations,
        ]) ?>
    </div>

    <br /><br /><br />
    <div class="container">
        <?php foreach ($listGroupModels as $state => $listModels): ?>
            <br />
            <div>
                <p>
                    <?= Html::a('&nbsp; &nbsp; ' .$state. ' &nbsp; &nbsp;', ['/site/store', 'SearchStoreForm[state]' => $state], ['class' => 'btn btn-flat btn-alternate']) ?>
                </p>
            </div>
            <br />
            <?php foreach ($listModels as $model): ?>
                <div class="well well-sm">
                    <div class="row">
                        <div class="col-sm-9">
                            <div class="pull-left">
                                <?= Html::img('@web/web/img/noun_33230_cc copy 2.png', ['style' => 'padding:9px 30px']) ?>
                            </div>
                            <div class="cyan">
                                <h4><?= $model->name ?></h4>
                                <p>
                                    <?= $model->address ?>, <?= $model->region ?>
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <p>
                                <?= Html::a(' &nbsp; &nbsp; &nbsp; Detail &nbsp; &nbsp; &nbsp; ', ['/site/store', 'SearchStoreForm[search]' => $model->name], [
                                    'class' => 'btn btn-secondary',
                                    'style' => 'margin:14px'
                                ]) ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        <?php endforeach ?>
    </div>

</div>