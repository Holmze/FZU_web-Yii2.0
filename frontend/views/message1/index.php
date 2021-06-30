<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\MessageSearch1 */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '开发者反馈区';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="message1-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('创建反馈', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'content:ntext',
            'create_time:datetime',

            
        ],
    ]); ?>
    <font size = "2">请友善留言</font>
</div>
