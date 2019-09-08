<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Court */

$this->title = 'Update Court: ' . $model->court_Name;
$this->params['breadcrumbs'][] = ['label' => 'Courts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->court_Name, 'url' => ['view', 'id' => $model->court_Name]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="court-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
