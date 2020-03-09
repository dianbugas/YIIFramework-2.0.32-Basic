<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Alumnis */

$this->title = Yii::t('app', 'Create Alumnis');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Alumnis'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="alumnis-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
