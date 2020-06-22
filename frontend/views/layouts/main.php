<?php

/* @var $this \yii\web\View */

/* @var $content string */

use kartik\icons\Icon;
use yii\helpers\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\bootstrap4\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

$mainMenu = Yii::$app->website->getMenu('main');
$menuItems = isset($mainMenu)
    ? array_map(function ($item) {
        return [
            'label' => $item->label,
            'url' => $item->url,
        ];
    }, $mainMenu->menuItems)
    : [];

$yearString = Yii::$app->params['year'] != date('Y')
    ? Yii::$app->params['year'] . ' - ' . date('Y')
    : date('Y');

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?> | <?= Yii::$app->name ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar navbar-expand-md navbar-light bg-light fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav ml-auto'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>

    <?= $content ?>

</div>

<footer class="footer bg-light py-4 border-top">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h2 class="mb-4"><?= Yii::t('app', 'Contact us!') ?></h2>
                <ul class="list-unstyled">
                    <li><?= Icon::show('phone', ['class' => 'fa-fw']) ?> <?= Yii::$app->params['contacts']['phone'] ?></li>
                    <li><?= Icon::show('mobile', ['class' => 'fa-fw']) ?> <?= Yii::$app->params['contacts']['mobile'] ?></li>
                    <li><?= Icon::show('map-marker', ['class' => 'fa-fw']) ?> <?= Yii::$app->params['contacts']['address'] ?></li>
                </ul>

                <ul class="list-inline fa-2x pt-2">
                    <li class="list-inline-item"><?= Html::a(Html::tag('i', false, ['class' => 'fab fa-facebook fa-fw']), Yii::$app->params['contacts']['facebook']) ?></li>
                    <li class="list-inline-item"><?= Html::a(Html::tag('i', false, ['class' => 'fab fa-twitter fa-fw']), Yii::$app->params['contacts']['twitter']) ?></li>
                    <li class="list-inline-item"><?= Html::a(Html::tag('i', false, ['class' => 'fab fa-instagram fa-fw']), Yii::$app->params['contacts']['instagram']) ?></li>
                    <li class="list-inline-item"><?= Html::a(Html::tag('i', false, ['class' => 'fab fa-linkedin fa-fw']), Yii::$app->params['contacts']['linkedin']) ?></li>
                    <li class="list-inline-item"><?= Html::a(Html::tag('i', false, ['class' => 'fab fa-telegram fa-fw']), Yii::$app->params['contacts']['telegram']) ?></li>
                </ul>

            </div>
            <div class="col-md-8">
                <h2 class="mb-4"><?= Yii::t('app', 'Send us a message!') ?></h2>
                <?= Yii::$app->runAction('/contactForm/default/contact', ['renderPartial' => true]) ?>
            </div>
        </div>
        <p class="border-top mt-4 pt-2 mb-0">
            &copy; <?= Yii::$app->name ?> (<?= $yearString ?>)<br/>
            <small class="text-muted">
                <?= Yii::t('app', 'Developed by {vendor}', [
                    'vendor' => Html::a('Daxslab', 'https://www.daxslab.com', ['target' => '_blank']),
                ]) ?>
            </small>
        </p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
