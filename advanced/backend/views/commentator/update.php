<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Commentator */

$this->title = 'Update Commentator: ' . $model->commentator_Name;
$this->params['breadcrumbs'][] = ['label' => 'Commentators', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->commentator_Name, 'url' => ['view', 'id' => $model->commentator_Name]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="commentator-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
