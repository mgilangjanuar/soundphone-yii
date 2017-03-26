<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <div class="before-navbar"></div>
    <?php NavBar::begin([
        'brandLabel' => Html::img('@web/web/img/logo putih.png'),
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]) ?>
    <?= Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Home', 'url' => ['/site']],
            ['label' => 'About Us', 'url' => ['/site/about-us']],
            ['label' => 'Product', 'url' => ['/site/product'], 'linkOptions' => ['id' => 'menu-product']],
            ['label' => 'Store', 'url' => ['#']],
            ['label' => 'Service Center', 'url' => ['#']],
            ['label' => 'News', 'url' => ['#']],
            ['label' => 'FAQ', 'url' => ['#']],
        ],
    ]) ?>
    <?php NavBar::end() ?>

    <div class="position-fixed">
        <div class="flickity product">
            <div class="flickity-cell">
                <div class="container-fluid text-center">
                    <a href="<?= Url::to(['/site/product-detail', 'id' => 'j2']) ?>">
                        <?= Html::img('@web/web/img/hp2 2.png', ['img-responsive']) ?>
                        <p class="caption">
                            <b><span class="white">SOUNDPHONE</span> <span class="cyan">J2</span></b>
                        </p>
                    </a>
                </div>
            </div>
            <div class="flickity-cell">
                <div class="container-fluid text-center">
                    <a href="<?= Url::to(['/site/product-detail', 'id' => 's1']) ?>">
                        <?= Html::img('@web/web/img/hp1 2.png', ['img-responsive']) ?>
                        <p class="caption">
                            <b><span class="white">SOUNDPHONE</span> <span class="cyan">S1</span></b>
                        </p>
                    </a>
                </div>
            </div>
            <div class="flickity-cell">
                <div class="container-fluid text-center">
                    <a href="<?= Url::to(['/site/product-detail', 'id' => 's2']) ?>">
                        <?= Html::img('@web/web/img/hp3 2.png', ['img-responsive']) ?>
                        <p class="caption">
                            <b><span class="white">SOUNDPHONE</span> <span class="cyan">S2</span></b>
                        </p>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="container- main-content">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="footer-logo">
        <?= Html::img('@web/web/img/logo-soundphone.png') ?>
    </div>
    <div class="container">

        <div class="row">
            <div class="col-md-2">
                <h4>PRODUCTS</h4>
                <p><a href="#">S1</a></p>
                <p><a href="#">S2</a></p>
                <p><a href="#">J2</a></p>
                <p><a href="#">See All</a></p>
                <br />
            </div>
            <div class="col-md-2">
                <h4>LOCATION</h4>
                <p><a href="#">Store</a></p>
                <p><a href="#">Service Center</a></p>
                <br />
            </div>
            <div class="col-md-2">
                <h4>ABOUT BLAUPUNKT</h4>
                <p><a href="#">Blaupunkt History</a></p>
                <p><a href="#">Contact Us</a></p>
                <p><a href="#">FAQ</a></p>
                <br />
            </div>
            <div class="col-md-2">
                <h4>NEWS</h4>
                <p><a href="#">What's Happening</a></p>
                <br />
            </div>
            <div class="col-md-4">
                <div class="row text-center">
                    <div class="col-sm-2 col-sm-offset-2">
                        <h3 class="white"><i class="fa fa-twitter"></i></h3>
                    </div>
                    <div class="col-sm-2">
                        <h3 class="white"><i class="fa fa-facebook"></i></h3>
                    </div>
                    <div class="col-sm-2">
                        <h3 class="white"><i class="fa fa-youtube"></i></h3>
                    </div>
                    <div class="col-sm-2">
                        <h3 class="white"><i class="fa fa-instagram"></i></h3>
                    </div>
                </div>
                <br />
            </div>
        </div>

        <hr class="white no-margin">

        <p class="pull-left footer-bottom">Blaupunkt Copyright <?= date('Y') ?> All rights reserved</p>
    </div>
</footer>

<?php $this->off(\yii\web\View::EVENT_END_BODY, [\yii\debug\Module::getInstance(), 'renderToolbar']); ?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
