<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Commentator */

$this->title = 'Create Commentator';
$this->params['breadcrumbs'][] = ['label' => 'Commentators', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="commentator-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
