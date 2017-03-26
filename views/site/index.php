<?php
use yii\helpers\Html;

/* @var $this yii\web\View */

$this->title = 'Welcome';
$this->registerCssFile('@web/web/libs/jquery.bxslider/jquery.bxslider.min.css');
$this->registerJsFile('@web/web/libs/jquery.bxslider/jquery.bxslider.min.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
?>
<div class="site-index">

    <ul class="bxslider vertical">
        <li>
            <?= Html::img('@web/web/img/home-revisi.png', ['class' => 'img-responsive']) ?>
        </li>
        <li>
            <?= Html::img('@web/web/img/home-revisi.png', ['class' => 'img-responsive']) ?>
        </li>
        <li>
            <?= Html::img('@web/web/img/home-revisi.png', ['class' => 'img-responsive']) ?>
        </li>
    </ul>

    <div class="container">
        <br /><br />
        <h1 class="text-center with-underline">What's New</h1>

        <div class="body-content">
            <br /><br /><br /><br />
            <div class="row">
                <div class="col-md-4">
                    <p>
                        <b><span>SOUNDPHONE</span> <span class="cyan">J2</span></b>
                    </p>
                    <p class="text-center">
                        <?= Html::img('@web/web/img/hp2.png', ['class' => 'img-responsive img-product']) ?>
                    </p>
                    <br />
                    <p class="text-center"><a class="btn btn-secondary" href="<?= Url::to(['/site/product-detail', 'id' => 'j2']) ?>">Learn More</a></p>
                    <br /><br />
                </div>
                <div class="col-md-4">
                    <p>
                        <b><span>SOUNDPHONE</span> <span class="cyan">S1</span></b>
                    </p>
                    <p class="text-center">
                        <?= Html::img('@web/web/img/hp1.png', ['class' => 'img-responsive img-product']) ?>
                    </p>
                    <br />
                    <p class="text-center"><a class="btn btn-secondary" href="<?= Url::to(['/site/product-detail', 'id' => 's1']) ?>">Learn More</a></p>
                    <br /><br />
                </div>
                <div class="col-md-4">
                    <p>
                        <b><span>SOUNDPHONE</span> <span class="cyan">S2</span></b>
                    </p>
                    <p class="text-center">
                        <?= Html::img('@web/web/img/hp3.png', ['class' => 'img-responsive img-product']) ?>
                    </p>
                    <br />
                    <p class="text-center"><a class="btn btn-secondary" href="<?= Url::to(['/site/product-detail', 'id' => 's2']) ?>">Learn More</a></p>
                    <br /><br />
                </div>
            </div>

        </div>
    </div>

</div>
