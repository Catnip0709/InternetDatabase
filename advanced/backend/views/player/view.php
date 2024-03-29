<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Player */

$this->title = $model->player_Team;
$this->params['breadcrumbs'][] = ['label' => 'Players', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="player-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'player_Team' => $model->player_Team, 'player_Number' => $model->player_Number], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'player_Team' => $model->player_Team, 'player_Number' => $model->player_Number], [
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
            'player_Name',
            'player_Team',
            'player_Age',
            'player_Number',
        ],
    ]) ?>

</div>
