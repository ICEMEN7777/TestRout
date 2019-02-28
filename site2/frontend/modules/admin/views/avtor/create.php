<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Avtor */

$this->title = 'Create Avtor';
$this->params['breadcrumbs'][] = ['label' => 'Avtors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="avtor-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
