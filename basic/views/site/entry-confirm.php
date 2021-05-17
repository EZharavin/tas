<?php
use yii\helpers\Html;
?>
	<li> Вы <?= Html::encode($model->name) ?></li>
		<li><label>Email</label>: <?= Html::encode($model->email) ?></li>
</ul>

