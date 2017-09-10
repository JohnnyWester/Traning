<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;

?>
<div class="site-index">
    <div class="jumbotron">
        <a href="<?= Url::to(['site/landing']);?>">
            <?= Html::img('@web/images/banner.jpg', ['class' => 'banner']) ?>
        </a>
    </div>
</div>
