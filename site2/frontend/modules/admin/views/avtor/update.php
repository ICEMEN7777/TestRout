<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Avtor */

$this->title = 'Update Avtor: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Avtors', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="avtor-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
