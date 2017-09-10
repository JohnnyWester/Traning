<?php

use app\models\User;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\UserSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-search">
    <ul>
    <?php

    $form = ActiveForm::begin([
        'action' => ['dispatch'],
        'method' => 'get',
    ]); ?>
    <li><label>Message</label>:<br /><textarea name="message" id="message" cols="30" rows="10" class="form-control"></textarea></li><br />
    <li><label>CreatedFrom</label>: <?= Html::activeDropDownList($model, 'createdFrom', ArrayHelper::map(User::find()->all(), 'id', 'date')) ?></li>
    <li><label>CreatedTo</label>: <?= Html::activeDropDownList($model, 'createdTo', ArrayHelper::map(User::find()->all(), 'id', 'date')) ?></li>

    <div class="form-group">
        <?= Html::submitButton('Send', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
    </ul>
</div>

