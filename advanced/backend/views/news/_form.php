<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\News */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="news-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'News_Title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'News_Time')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'News_Link')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'News_TeamA')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'News_TeamB')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
