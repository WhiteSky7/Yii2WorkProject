<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\Pjax;

?>
<?php Pjax::begin([
    // Опции Pjax
]); ?>

<?php $form = ActiveForm::begin([
    'options' => ['data' => ['pjax' => true]],
]); ?>

    <?= $form->field($model, 'username') ?>

    <?= $form->field($model, 'email') ?>

    <?= $form->field($model, 'phoneNumber') ?>

    <div class="form-group">
        <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>
<?php Pjax::end(); ?>