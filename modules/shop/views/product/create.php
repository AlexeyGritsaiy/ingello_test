<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \app\modules\shop\modules\ProductAddModel */
/* @var $queryParams array */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use yii\helpers\VarDumper;

$this->title = 'Product add';
$this->params['breadcrumbs'][] = $this->title;
?>

<?php if(!empty($queryParams)):  ?>
    <h3>Query params from request</h3>
    <?php VarDumper::dump($queryParams, 10, true); ?>
<?php endif; ?>

<hr/>
<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'title')->textInput(['autofocus' => true]) ?>

<?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

<div class="form-group">
    <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
</div>

<?php ActiveForm::end(); ?>
