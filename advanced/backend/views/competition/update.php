<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Competition */

$this->title = 'Update Competition: ' . $model->Competition_Time;
$this->params['breadcrumbs'][] = ['label' => 'Competitions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Competition_Time, 'url' => ['view', 'Competition_Time' => $model->Competition_Time, 'Competition_TeamA' => $model->Competition_TeamA, 'Competition_TeamB' => $model->Competition_TeamB]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="competition-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
