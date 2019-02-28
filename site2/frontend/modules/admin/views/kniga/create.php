<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Kniga */

$this->title = 'Create Kniga';
$this->params['breadcrumbs'][] = ['label' => 'Knigas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kniga-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
