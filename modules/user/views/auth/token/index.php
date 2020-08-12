<?php

/* @var $this yii\web\View */

use yii\bootstrap\Alert;
use yii\helpers\Html;

$this->title = 'User token generate';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="User-default-index">
    <h1>Generate user token</h1>

    <?= Html::beginForm(['/user/auth/token/generate'], 'post') ?>
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
