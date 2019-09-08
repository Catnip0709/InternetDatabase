<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Tomandjerry */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tomandjerry-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'NAME')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'SEXUAL')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'IS_LEADER')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'BIRTH_PLACE')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
