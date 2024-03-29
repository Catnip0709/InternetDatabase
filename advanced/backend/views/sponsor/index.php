<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\SponsorSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sponsors';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sponsor-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Sponsor', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Sponsor_Name',
            'Sponsor_Amount',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
