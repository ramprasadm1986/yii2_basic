<?php 
use yii\bootstrap4\Html;
?>

<div class="text-center">
    <?= date('Y') ?> &copy; <?= Html::encode(Yii::getAlias('@APP_NAME')) ?>.
    <a href="#" class="go-top">
        <i class="fa fa-angle-up"></i>
    </a>
</div>