<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Registrations */

$this->title = 'Create Registrations';
$this->params['breadcrumbs'][] = ['label' => 'Registrations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="registrations-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
