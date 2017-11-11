<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Registrations */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="registrations-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'first_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'last_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'specialty')->textarea(['rows' => 2]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'know_arduino')->dropDownList([ 'yes' => 'Yes', 'no' => 'No', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'level')->dropDownList([ 'Aucun' => 'Aucun', 'Débutant' => 'Débutant', 'Intérmediaire' => 'Intérmediaire', 'Expert' => 'Expert', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'coming')->dropDownList([ '02 Décembre' => '02 Décembre', '03 Décembre' => '03 Décembre', 'Les deux jours' => 'Les deux jours', '' => '', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'participated')->dropDownList([ 'Yes' => 'Yes', 'No' => 'No', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'interested')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
