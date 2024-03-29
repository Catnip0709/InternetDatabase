<?php

/* @var $this \yii\web\View */
/* @var $content string */
/*
Team:猫和老鼠
Coding by 潘巧巧1613415
*/

use backend\assets\LoginAsset;
use yii\helpers\Html;


LoginAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<style>
.signwrapper{
    background:url(statics/images/photos/bg2.jpg);
}
</style>
<body class="signwrapper"> 
<?php $this->beginBody() ?>

<?=$content?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
