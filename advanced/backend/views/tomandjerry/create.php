<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Tomandjerry */

$this->title = 'Create Tomandjerry';
$this->params['breadcrumbs'][] = ['label' => 'Tomandjerries', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tomandjerry-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
