<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\classes\Caption;

/* @var $this yii\web\View */
/* @var $model app\models\Unit */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="unit-form">

    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
        <?= $form->field($model, 'fullname')->textInput(['maxlength' => true]) ?>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Caption::ACTION_CREATE : Caption::ACTION_UPDATE, ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    <?= Html::a(Caption::ACTION_CANCEL, ['/unit'], [ 'class' => 'btn btn-warning',]) ?>
    </div>
<?php ActiveForm::end(); ?>

</div>
