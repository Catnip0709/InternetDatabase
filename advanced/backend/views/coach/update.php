<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Coach */

$this->title = 'Update Coach: ' . $model->Coach_Name;
$this->params['breadcrumbs'][] = ['label' => 'Coaches', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Coach_Name, 'url' => ['view', 'id' => $model->Coach_Name]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="coach-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
