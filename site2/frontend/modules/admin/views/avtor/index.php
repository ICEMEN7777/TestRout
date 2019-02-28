<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AvtorSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Avtors';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="avtor-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Avtor', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'creation date',
            'date of change',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
