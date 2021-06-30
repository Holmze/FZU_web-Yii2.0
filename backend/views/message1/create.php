<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Message1 */

$this->title = 'Create Message1';
$this->params['breadcrumbs'][] = ['label' => 'Message1s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="message1-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
