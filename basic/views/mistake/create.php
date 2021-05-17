<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Mistake */

$this->title = 'Create Mistake';
$this->params['breadcrumbs'][] = ['label' => 'Mistakes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mistake-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
