<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Team */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="team-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Team_Nation')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Team_Coach')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Team_Score')->textInput() ?>

    <?= $form->field($model, 'Team_Group')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Team_Shirtsponsor')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
