<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\KatAuto */

$this->title = 'Create Kat Auto';
$this->params['breadcrumbs'][] = ['label' => 'Kat Autos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kat-auto-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
