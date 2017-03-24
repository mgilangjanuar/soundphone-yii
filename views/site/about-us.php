<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'About';
?>
<div class="site-about logo-black wrap-padding-top">
    <div class="container">

        <div>
            <br /><br /><br /><br /><br />
            <p>
                <?= Html::img('@web/web/img/logo-big.png', ['class' => 'img-responsive img-center']) ?>
            </p>
            <br /><br />
        </div>

        <div>
            <p class="text-justify">
                In 1923, when radio broadcasting made its first sound in Germany - the "Ideal" company was
                founded in Berlin. It first produced headphones. Every single item was carefully tested by 
                technicians and labeled with a quality symbol - the blue point.
            </p>

            <h2 class="cyan">A quality symbol turns into a trademark</h2>
            <p class="text-justify">
                It did not take long before customers simply asked for the bluepoint-headphones. The quality
                symbol had turned into a trademark. In 1938 it eventually became the company's name. Until
                December 2008 the company had formed part of the Bosch-Group for more than sixty years. Since
                then it has been part of the AURELIUS Group. After World War II the company moved headquarters
                from Berlin to Hildesheim. A hundred years of automotive history have been accompanied by plenty
                of technical progress.
            </p>
            <h2 class="cyan">Blaupunkt Now</h2>
            <p class="text-justify">
                In 2015, Blaupunk launch its first Soundphone in Indonesia.
            </p>
            <br /><br /><br />
        </div>

        <div>
            <p class="with-underline text-center lead">
                <?= Html::a('<span class="cyan">History</span>', ['#'], ['class' => 'btn h2 btn-tab-history']) ?>
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                <?= Html::a('<span class="cyan">Contact Us</span>', ['#'], ['class' => 'btn h2 btn-tab-contact-us']) ?>
            </p>
            <br />
        </div>

        <div>
            <p>
                <?= Html::img('@web/web/img/history.png', ['class' => 'img-responsive img-center btn-img-history hide']) ?>
            </p>
        </div>

        <div>
            <p>
                <?= Html::img('@web/web/img/hp-contact-us-frame.png', ['class' => 'img-responsive img-center btn-img-contact-us']) ?>
            </p>
            <div class="contact-us-form">
                <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                    <?= $form->field($model, 'name')->textInput(['placeholder' => 'Name'])->label(false)->error(false) ?>
                    
                    <?= $form->field($model, 'email')->textInput(['placeholder' => 'Email'])->label(false)->error(false) ?>
                    
                    <?= $form->field($model, 'phone')->textInput(['placeholder' => 'Phone Number'])->label(false)->error(false) ?>
                    
                    <?= $form->field($model, 'subject')->textInput(['placeholder' => 'Subject'])->label(false)->error(false) ?>
                    
                    <?= $form->field($model, 'body')->textInput(['placeholder' => 'Message'])->label(false)->error(false) ?>
                    
                    <div class="form-group text-center">
                        <?= Html::submitButton('Send', ['class' => 'btn btn-secondary', 'name' => 'contact-button']) ?>
                    </div>

                <?php ActiveForm::end(); ?>
            </div>
        </div>

    </div>
</div>
