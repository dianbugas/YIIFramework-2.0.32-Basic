<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AlumnisSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="alumnis-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'nama') ?>

    <?= $form->field($model, 'jk') ?>

    <?= $form->field($model, 'tmp_lahir') ?>

    <?= $form->field($model, 'tgl_lahir') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'no_hp') ?>

    <?php // echo $form->field($model, 'alamat') ?>

    <?php // echo $form->field($model, 'foto') ?>

    <?php // echo $form->field($model, 'angkatan') ?>

    <?php // echo $form->field($model, 'status_kerja') ?>

    <?php // echo $form->field($model, 'tmp_kerja') ?>

    <?php // echo $form->field($model, 'beastudi_id') ?>

    <?php // echo $form->field($model, 'prodi_id') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
