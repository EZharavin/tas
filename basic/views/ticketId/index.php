<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TicketIdSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ticket Ids';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ticket-id-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Ticket Id', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
