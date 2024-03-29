<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Tomandjerry */

$this->title = 'Update Tomandjerry: ' . $model->NAME;
$this->params['breadcrumbs'][] = ['label' => 'Tomandjerries', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->NAME, 'url' => ['view', 'id' => $model->NAME]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tomandjerry-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
