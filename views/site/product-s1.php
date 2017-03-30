<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;

$this->title = 'Soundphone S1'
?>

<div class="site-product-detail s1 logo-black wrap-padding-top">

    <div class="container">
        <h2 class="text-center"><span class="black">Soundphone</span> <span class="cyan">S1</span></h2>

        <br /><br />
        <?= Html::img('@web/web/img/s1-spec-top.png', ['class' => 'img-responsive img-center']) ?>

        <br /><br /><br /><br />
        <?= Html::img('@web/web/img/s1-top.png', ['class' => 'img-responsive img-center']) ?>
    </div>

    <section class="section-1 big-padding-top-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <?= Html::img('@web/web/img/s1-hp-section-1.png', ['class' => 'img-center img-responsive']) ?>
                </div>
                <div class="col-md-6 white">
                    <br /><br /><br /><br /><br /><br />
                    <h2>Attractive Insideoutside</h2>
                    <br />
                    <p class="text-justify">
                        Never go out of style. S1 is available in 4 different colors with 5” HD display and attractive design. Equipped with Snapdragon Processor and Android Nougat, makes S1 attractive inside and outside
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="section-2">
        <div class="pull-right">
            <?= Html::img('@web/web/img/s1-hp-section-2.png', ['class' => 'img-center img-responsive']) ?>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-5 big-padding-top-bottom">
                    <br /><br /><br /><br /><br /><br />
                    <h2>Ready for Stand Out?</h2>
                    <br />
                    <p>
                        Finger print ready, more secure, handy, and quick access.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="section-3">
        <div class="embed-responsive embed-responsive-16by9">
            <iframe style="width: 100%" class="embed-responsive-item" src="https://www.youtube.com/embed/hBTQi-4yRVs"> </iframe>
        </div>
    </section>

    <section class="section-4 big-padding-top-bottom">
        <div class="container text-center">
            <h2>Specification</h2>
            <br />
            <?= Html::img('@web/web/img/s1-spec-bottom.png', ['class' => 'img-responsive img-center']) ?>
            <br /><br /><br />
            
            <p>
                Coming Soon
            </p>
            <br /><br /><br /><br /><br />

            <div>
                <p class="with-underline text-center lead">
                    <?= Html::a('<span class="cyan">Contact Us</span>', ['#'], ['class' => 'btn h2 btn-tab-contact-us']) ?>
                </p>
                <br />
            </div>

            <div>
                <p>
                    <?= Html::img('@web/web/img/hp-contact-us-frame.png', ['class' => 'img-responsive img-center btn-img-contact-us hide']) ?>
                </p>
                <div class="contact-us-form hide">
                    <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                        <?= $form->field($model, 'name')->textInput(['placeholder' => 'Name'])->label(false)->error(false) ?>
                        
                        <?= $form->field($model, 'email')->textInput(['placeholder' => 'Email'])->label(false)->error(false) ?>
                        
                        <?= $form->field($model, 'phone')->textInput(['placeholder' => 'Phone Number'])->label(false)->error(false) ?>
                        
                        <?= $form->field($model, 'subject')->textInput(['placeholder' => 'Subject'])->label(false)->error(false) ?>
                        
                        <?= $form->field($model, 'body')->textInput(['placeholder' => 'Message'])->label(false)->error(false) ?>
                        
                        <div class="form-group text-center">
                            <?= Html::submitButton('<span class="white">&nbsp; &nbsp; Send &nbsp; &nbsp;</span>', ['class' => 'btn btn-secondary', 'name' => 'contact-button']) ?>
                        </div>

                    <?php ActiveForm::end(); ?>
                </div>
            </div>

            <!--<div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <p><b>Key Points</b></p>
                    <p>
                        LTE+WCDMA+GSM(MSM8909 Quad Core), Android 7.0, Smart Phone
                        CPU Freq.:1.3G/LTE Cat. 4/5.0 HD/ Flash: 16GB+2GB/ Camera:13M AF with Flash(Rear)，5M with Flash(Front)
                        G-Sensor/P-Sensor/L-Sensor/MP3/MP4/BT/FM/WIFI/GPS/OTG/Quick Charge
                    </p>
                    <br />
                    <p><b>Dimension</b></p>
                    <p>
                        145.5*71.5*9.8 mm<br/>（long*wide*thick）
                    </p>
                    <br />
                    <p><b>Memory Card</b></p>
                    <p>
                        RAM 2GB + ROM 16GB
                    </p>
                    <br />
                    <p><b>Screen</b></p>
                    <p>
                        5.0’HD, 1280x720 pixels
                    </p>
                    <br />
                    <p><b>Battery Capacity</b></p>
                    <p>
                        2300mAh
                    </p>
                    <br />
                    <p><b>Interface</b></p>
                    <p>
                        Micro USB / 3.5mm standard port Earphone/ BT4.1
                    </p>
                </div>
            </div>-->
        </div>
    </section>

</div>