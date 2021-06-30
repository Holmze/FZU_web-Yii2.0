<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Message1 */

$this->title = 'Update Message1: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Message1s', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="message1-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
