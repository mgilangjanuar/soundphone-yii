<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
use kartik\file\FileInput;
use yii\redactor\widgets\Redactor;

?>

<?php $form = ActiveForm::begin([
    'layout' => 'horizontal',
    'options' => [
        'enctype' => 'multipart/form-data',
    ]
]) ?>

    <?php if ($model->featured_image): ?>
        <p>
            <?= Html::img($model->featured_image, ['class' => 'img-responsive img-full img-center', 'style' => 'max-width:500px;']) ?>
        </p>
        <br />
    <?php endif ?>
    <?= $form->field($model, 'fileUpload')->widget(FileInput::classname(), [
        'pluginOptions' => [
            'browseClass' => 'waves-effect waves-light btn cyan',
            'uploadClass' => 'waves-effect waves-light btn',
            'removeClass' => 'waves-effect waves-light btn red',
            'showPreview' => true,
            'showRemove' => true,
            'showUpload' => false,
        ],
    ]) ?>

    <?= $form->field($model, 'title') ?>

    <?= $form->field($model, 'content')->widget(Redactor::className()) ?>

    <div class="form-group text-center">
        <?= Html::submitButton('<i class="fa fa-save"></i> &nbsp; SUBMIT', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
    </div>

<?php ActiveForm::end() ?>