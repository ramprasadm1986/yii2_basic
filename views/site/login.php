<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap4\ActiveForm $form */
/** @var \common\models\LoginForm $model */

use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;

$this->title = 'LOGIN';
?>
<div class="site-login">   
        <?php $form = ActiveForm::begin(['id' => 'login-form','options'=>['class'=>'form-signin']]); ?>
            <h2 class="form-signin-heading"><?= $this->title?></h2>
            <div class="login-wrap">
            <?= $form->field($model, 'username')->textInput(['autofocus' => true,'placeholder'=>'Username'])->label(false); ?>

            <?= $form->field($model, 'password')->passwordInput(['autofocus' => true,'placeholder'=>'Password'])->label(false); ?>

            <?= $form->field($model, 'rememberMe')->checkbox() ?>

            <div class="form-group">
                <?= Html::submitButton('Login', ['class' => 'btn btn-lg btn-login btn-block', 'name' => 'login-button']) ?>
            </div>
            </div>
        <?php ActiveForm::end(); ?>   
</div>
