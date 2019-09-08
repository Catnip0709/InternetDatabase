<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Commentator */

$this->title = $model->commentator_Name;
$this->params['breadcrumbs'][] = ['label' => 'Commentators', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="commentator-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->commentator_Name], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->commentator_Name], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'commentator_Name',
            'commentator_NativePlace',
        ],
    ]) ?>

</div>
