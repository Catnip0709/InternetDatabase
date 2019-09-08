<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Commentator */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="commentator-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'commentator_Name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'commentator_NativePlace')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
