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

    <?= Html::img('@web/web/img/banner 3.png', ['class' => 'img-responsive img-center']) ?>
    
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

</div>