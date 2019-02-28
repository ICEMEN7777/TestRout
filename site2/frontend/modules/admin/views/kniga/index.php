<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\KnigaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Knigas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kniga-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Kniga', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'id_avtor',
            'creation date',
            'date of change',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
