<?php

/*
 * This file is part of the 2amigos/yii2-usuario project.
 *
 * (c) 2amigOS! <http://2amigos.us/>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var \Da\User\Form\ResendForm $model
 */

$this->title = Yii::t('usuario', 'Request new confirmation message');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
        <?php $form = ActiveForm::begin(
            [
                'id' => $model->formName(),
                'options' => ['class' => 'card'],
                'enableAjaxValidation' => true,
                'enableClientValidation' => false,
            ]
        ); ?>
        <h3 class="card-header h5"><?= Html::encode($this->title) ?></h3>
        <div class="card-body">
            <?= $form->field($model, 'email')->textInput(['autofocus' => true]) ?>
        </div>
        <div class="card-footer text-right">
            <?= Html::submitButton(Yii::t('usuario', 'Continue'), ['class' => 'btn btn-primary btn-block']) ?><br>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
</div>
</div>
