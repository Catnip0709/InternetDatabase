<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\TomandjerrySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tomandjerries';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tomandjerry-index">

    <h1>猫和老鼠</h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'NAME',
            'SEXUAL',
            'IS_LEADER',
            'BIRTH_PLACE',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
