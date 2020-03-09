<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Alumnis */
/* @var $form yii\widgets\ActiveForm */

$radio_ary = [
    'laki' => 'Laki-Laki',
    'prempuan' => 'Perempuan',
]
?>

<div class="alumnis-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <!-- <?php //$form->field($model, 'jk')->textInput(['maxlength' => true]) 
            ?> -->
    <?= $form->field($model, 'jk')->radioList($radio_ary, [
        'unselect' => null,
        'separator' => '<br>'
    ]) ?>

    <?= $form->field($model, 'tmp_lahir')->textInput(['maxlength' => true]) ?>

    <?php //$form->field($model, 'tgl_lahir')->textInput() 
    ?>

    <?= $form->field($model, 'tgl_lahir')->widget(DatePicker::classname(), [
        'options' => ['placeholder' => 'Tanggal Lahir'],
        'pluginOptions' => [
            'autoclose' => true
        ]
    ]); ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_hp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'foto')->fileInput(); ?>

    <?= $form->field($model, 'angkatan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status_kerja')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tmp_kerja')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'beastudi_id')->textInput() ?>

    <?= $form->field($model, 'prodi_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>