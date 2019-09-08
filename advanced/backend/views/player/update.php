<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Player */

$this->title = 'Update Player: ' . $model->player_Team;
$this->params['breadcrumbs'][] = ['label' => 'Players', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->player_Team, 'url' => ['view', 'player_Team' => $model->player_Team, 'player_Number' => $model->player_Number]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="player-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
