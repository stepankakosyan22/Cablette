<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */

/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Signup';
?>

<div class="col-lg-5">
    <div style="width:100%">
        <div style="width:20%" class="pull-left">
            <svg  id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 876.87 993.28">
                <defs><style>.cls-1{fill:#28a2dc}</style></defs>
                <title>Cablette Logo</title>
                <path class="cls-1" d="M270.06,579.85a35,35,0,0,1-34.25-28A267.34,267.34,0,0,1,355.93,271.38,35,35,0,1,1,393.1,330.7a196.45,196.45,0,0,0-92.71,167.35,198.75,198.75,0,0,0,4,39.78,35,35,0,0,1-34.33,42Z"/>
                <path class="cls-1" d="M413,865a35.38,35.38,0,0,1-8.66-1.09A377.58,377.58,0,1,1,760,226.49l.31.3A90.11,90.11,0,0,1,635.06,356.36l-.45-.44a196.36,196.36,0,0,0-136.89-55.2c-6.49,0-13,.32-19.46.94A35,35,0,1,1,471.47,232c8.67-.84,17.5-1.27,26.25-1.27a266,266,0,0,1,185.51,74.84l.42.41a20.1,20.1,0,0,0,27.85-29l-.22-.22a306,306,0,0,0-213.56-86.24c-169.58,0-307.54,138-307.54,307.54A307.2,307.2,0,0,0,421.6,796.11,35,35,0,0,1,413,865Z"/>
                <path class="cls-1" d="M512.4,875.28a35,35,0,0,1-1.45-70,306.41,306.41,0,0,0,79-13.79,35,35,0,1,1,21,66.79,377.51,377.51,0,0,1-97,16.94Z"/>
                <path class="cls-1" d="M497.72,985.8A487.93,487.93,0,0,1,62.6,277.44,35,35,0,1,1,125,309.14,413.25,413.25,0,0,0,80,498.05C80,728.4,267.37,915.8,497.72,915.8A415.51,415.51,0,0,0,789,797.53l1.23-1.17a19.92,19.92,0,0,0,6.24-14.54,20.14,20.14,0,0,0-34.51-14.1l-1.4,1.38a380.56,380.56,0,0,1-47.33,39,35,35,0,0,1-40-57.45,309.71,309.71,0,0,0,38.58-31.79l.53-.51A90.12,90.12,0,1,1,838.51,847l-.85.81A485.13,485.13,0,0,1,497.72,985.8Z"/>
                <path class="cls-1" d="M177.58,212.91a35,35,0,0,1-24.75-59.75,490.32,490.32,0,0,1,64.84-54.49A35,35,0,0,1,257.9,156a420,420,0,0,0-55.57,46.71A34.93,34.93,0,0,1,177.58,212.91Z"/>
                <path class="cls-1" d="M817.86,212.91a34.85,34.85,0,0,1-24.74-10.25C714.21,123.76,609.31,80.3,497.72,80.3A416.06,416.06,0,0,0,348.5,107.73a35,35,0,0,1-25-65.38A487.37,487.37,0,0,1,842.61,153.16a35,35,0,0,1-24.75,59.75Z"/></svg>
        </div>
        <!--        <h1 style="color:whitesmoke;text-align: center;cursor: default">REGISTER</h1>-->
    </div>

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['class' => 'register_input form-control', 'placeholder' => 'Name'])->label(false) ?>

    <?= $form->field($model, 'surname')->textInput(['class' => 'register_input form-control', 'placeholder' => 'Surname'])->label(false) ?>

    <?= $form->field($model, 'email')->textInput(['class' => 'register_input form-control', 'placeholder' => 'E-mail'])->label(false) ?>

    <?= $form->field($model, 'username')->textInput(['class' => 'register_input form-control', 'placeholder' => 'Username'])->label(false) ?>

    <?= $form->field($model, 'password')->passwordInput(['class' => 'register_input form-control', 'placeholder' => 'Password'])->label(false) ?>

    <?= $form->field($model, 'password_repeat')->passwordInput(['class' => 'register_input form-control', 'placeholder' => 'Repeat password'])->label(false) ?>

    <div class="form-group">
        <?= Html::submitButton('Register', ['class' => 'submit_button', 'name' => 'signup-button']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>
