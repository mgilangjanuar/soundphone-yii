<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Product';
?>
<div class="site-product logo-black wrap-padding-top">
    
    <div class="container">
        <div class="flickity default">
            <div class="flickity-cell">
                <div class="container-fluid text-center">
                    <a href="#">
                        <?= Html::img('@web/web/img/hp2 2.png', ['img-responsive']) ?>
                        <p class="caption">
                            <b><span class="black">SOUNDPHONE</span> <span class="cyan">J2</span></b>
                        </p>
                    </a>
                    <p class="text-center">
                        Lorem impsum
                    </p>
                    <p class="text-center">
                        <p class="text-center"><a class="btn btn-secondary" href="<?= Url::to(['/site/product-detail', 'id' => 'j2']) ?>">Learn More</a></p>
                    </p>
                </div>
            </div>
            <div class="flickity-cell">
                <div class="container-fluid text-center">
                    <a href="#">
                        <?= Html::img('@web/web/img/hp1 2.png', ['img-responsive']) ?>
                        <p class="caption">
                            <b><span class="black">SOUNDPHONE</span> <span class="cyan">S1</span></b>
                        </p>
                    </a>
                    <p class="text-center">
                        Lorem impsum
                    </p>
                    <p class="text-center">
                        <p class="text-center"><a class="btn btn-secondary" href="<?= Url::to(['/site/product-detail', 'id' => 's1']) ?>">Learn More</a></p>
                    </p>
                </div>
            </div>
            <div class="flickity-cell">
                <div class="container-fluid text-center">
                    <a href="#">
                        <?= Html::img('@web/web/img/hp3 2.png', ['img-responsive']) ?>
                        <p class="caption">
                            <b><span class="black">SOUNDPHONE</span> <span class="cyan">S2</span></b>
                        </p>
                    </a>
                    <p class="text-center">
                        Lorem impsum
                    </p>
                    <p class="text-center">
                        <p class="text-center"><a class="btn btn-secondary" href="#">Learn More</a></p>
                    </p>
                </div>
            </div>
        </div>        

        <div class="row product-overview">
            <div class="col-sm-6">
                <?= Html::img('@web/web/img/Shape 1.png') ?>
                <h2>Title goes here</h2>
                <br />
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                </p>
            </div>
            <div class="product-img right">
                <?= Html::img('@web/web/img/hp 1-overview.png', ['class' => 'img-responsive']) ?>
            </div>
        </div>
    </div>

</div>