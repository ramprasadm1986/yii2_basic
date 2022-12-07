<?php

/** @var \yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;


AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    
    <title><?= Html::encode(Yii::getAlias('@APP_NAME')." : ".$this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="light-sidebar-nav">
<?php $this->beginBody() ?>
    <section id="container" class="">
        <header class="header white-bg">
            <?= $this->render('_header.php') ?>
        </header>
        <aside>
            <?= $this->render('_sidebar.php') ?>
        </aside>

        <section id="main-content">
            <?= $this->render('_content.php',['content' => $content]) ?>
            
        </section>
        
<footer class="site-footer">
     <?= $this->render('_footer.php') ?>
    
</footer>
    </section>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage();
