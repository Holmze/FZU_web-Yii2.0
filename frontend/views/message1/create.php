<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Message1 */

$this->title = '创建留言';
$this->params['breadcrumbs'][] = ['label' => '留言列表', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="message1-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
