<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Videos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="videos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Videos_Name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Videos_Time')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Videos_Link')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Videos_TeamA')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Videos_TeamB')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
