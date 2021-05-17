<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Mistake */

$this->title = 'Update Mistake: ' . $model->username;
$this->params['breadcrumbs'][] = ['label' => 'Mistakes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->username, 'url' => ['view', 'id' => $model->username]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="mistake-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
