<?php
use yii\helpers\Html;
?>
<p>Вы ввели следующую информацию:</p>

<ul>
    <li><label>username</label>: <?= Html::encode($model->username) ?></li>
    <li><label>Email</label>: <?= Html::encode($model->email) ?></li>
    <li><label>phoneNumber</label>: <?= Html::encode($model->phoneNumber) ?></li>
</ul>