<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm' => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
    'modules' => [
        'website' => [
            'class' => 'daxslab\website\Module',
            'cacheThumbnails' => true,
        ],
        'user' => [
            'class' => 'Da\User\Module',
            'enableFlashMessages' => true,
            'enableRegistration' => false,
            'enableEmailConfirmation' => false,
        ],
    ],
];
