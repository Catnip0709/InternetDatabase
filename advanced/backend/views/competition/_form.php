<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Competition */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="competition-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Competition_Time')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Competition_TeamA')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Competition_TeamB')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Competition_AScore')->textInput() ?>

    <?= $form->field($model, 'Competition_BScore')->textInput() ?>

    <?= $form->field($model, 'Competition_Court')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Competition_CCTV5')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
