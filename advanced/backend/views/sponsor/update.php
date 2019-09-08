<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Sponsor */

$this->title = 'Update Sponsor: ' . $model->Sponsor_Name;
$this->params['breadcrumbs'][] = ['label' => 'Sponsors', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Sponsor_Name, 'url' => ['view', 'id' => $model->Sponsor_Name]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sponsor-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
