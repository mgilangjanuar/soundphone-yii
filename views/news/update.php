<?php
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = $model->title;
?>

<div class="news-update logo-black wrap-padding-top">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="text-center"><?= $this->title ?></h1>
                <br />
                
                <?= $this->render('_form', ['model' => $model]) ?>
            </div>
        </div>
    </div>
</div>