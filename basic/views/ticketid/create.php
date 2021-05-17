<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TicketId */

$this->title = 'Create Ticket Id';
$this->params['breadcrumbs'][] = ['label' => 'Ticket Ids', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ticket-id-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
