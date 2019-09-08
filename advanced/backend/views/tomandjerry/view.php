<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Tomandjerry */

$this->title = $model->NAME;
$this->params['breadcrumbs'][] = ['label' => 'Tomandjerries', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tomandjerry-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->NAME], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->NAME], [
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
            'NAME',
            'SEXUAL',
            'IS_LEADER',
            'BIRTH_PLACE',
        ],
    ]) ?>

</div>
