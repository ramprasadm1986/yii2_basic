<?php

/**
 * @var string $content
 * @var \yii\web\View $this
 */

use yii\bootstrap4\Html;
use app\widgets\Alert;
use yii\bootstrap4\Breadcrumbs;

?>
<style>
.wrapper{
    max-width:100vw;
}
</style>
<!-- page content -->
<section class="wrapper site-min-height">
    <?= Alert::widget() ?>
    <?= Breadcrumbs::widget([
    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
    ]) ?>
    <?= $content ?>
<section>

<!-- /page content -->