<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */

/* @var $model app\models\ContactForm */

use yii\bootstrap\Alert;
use yii\helpers\Html;

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="User-default-index">
    <h1>Generate user token</h1>

    <?= Html::beginForm(['/user/auth/token/create'], 'post') ?>
    <?= Html::submitButton('Generate'); ?>
    <?= Html::endForm() ?>

    <hr/>

    <?php if (\Yii::$app->session->hasFlash('user-token')): ?>
        <?= Alert::widget([
            'options' => [
                'class' => 'alert-info',
            ],
            'body' => \Yii::$app->session->getFlash('user-token'),
        ]); ?>

    <?php endif; ?>
</div>
