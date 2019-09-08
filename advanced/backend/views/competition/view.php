<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Competition */

$this->title = $model->Competition_Time;
$this->params['breadcrumbs'][] = ['label' => 'Competitions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="competition-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'Competition_Time' => $model->Competition_Time, 'Competition_TeamA' => $model->Competition_TeamA, 'Competition_TeamB' => $model->Competition_TeamB], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'Competition_Time' => $model->Competition_Time, 'Competition_TeamA' => $model->Competition_TeamA, 'Competition_TeamB' => $model->Competition_TeamB], [
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
            'Competition_Time',
            'Competition_TeamA',
            'Competition_TeamB',
            'Competition_AScore',
            'Competition_BScore',
            'Competition_Court',
            'Competition_CCTV5',
        ],
    ]) ?>

</div>
