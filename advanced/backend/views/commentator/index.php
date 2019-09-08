<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\CommentatorSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Commentators';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="commentator-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Commentator', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'commentator_Name',
            'commentator_NativePlace',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
