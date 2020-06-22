<?php

/*
 * This file is part of the 2amigos/yii2-usuario project.
 *
 * (c) 2amigOS! <http://2amigos.us/>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Nav;
use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var \Da\User\Model\User $user
 */

$this->title = Yii::t('usuario', 'Create a user account');
$this->params['breadcrumbs'][] = ['label' => Yii::t('usuario', 'Users'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="clearfix"></div>
<?= $this->render(
    '/shared/_alert',
    [
        'module' => Yii::$app->getModule('user'),
    ]
) ?>

<?= $this->render('/shared/_menu') ?>
<div class="row">
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <?= Nav::widget(
                    [
                        'options' => [
                            'class' => 'nav nav-pills flex-column',
                        ],
                        'items' => [
                            [
                                'label' => Yii::t('usuario', 'Account details'),
                                'url' => ['/user/admin/create'],
                            ],
                            [
                                'label' => Yii::t('usuario', 'Profile details'),
                                'options' => [
                                    'class' => 'disabled',
                                    'onclick' => 'return false;',
                                ],
                            ],
                            [
                                'label' => Yii::t('usuario', 'Information'),
                                'options' => [
                                    'class' => 'disabled',
                                    'onclick' => 'return false;',
                                ],
                            ],
                        ],
                    ]
                ) ?>
            </div>
        </div>
    </div>
    <div class="col-md-9">
        <div class="alert alert-info">
            <?= Yii::t('usuario', 'Credentials will be sent to the user by email') ?>.
            <?= Yii::t(
                'usuario',
                'A password will be generated automatically if not provided'
            ) ?>.
        </div>
        <?php $form = ActiveForm::begin(
            [
                'options' => ['class' => 'card'],
                'enableAjaxValidation' => true,
                'enableClientValidation' => false,
            ]
        ); ?>
        <div class="card-body">
            <?= $this->render('/admin/_user', ['form' => $form, 'user' => $user]) ?>
        </div>
        <div class="card-footer text-right">
            <?= Html::submitButton(
                Yii::t('usuario', 'Save'),
                ['class' => 'btn btn-success']
            ) ?>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
</div>
