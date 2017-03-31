<?php
use yii\helpers\Html;
use yii\helpers\Url;
use kartik\select2\Select2;

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

    <div class="container">
        
    </div>

</div>