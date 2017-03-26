<?php

$params = require(__DIR__ . '/params.php');

$config = [
    'id' => 'basic',
    'language' => 'ru-RU',
    'sourceLanguage' => 'en-US',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'zI5SLQEmR7TIfwkvs11DJOdW2BW64nS7',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => require(__DIR__ . '/db.php'),
        
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            '/' => 'site/index',
            'about' => 'site/about',
            'contact' => 'site/contact',
            'login' => 'site/login',
            'map' => 'site/map',
            'language/view' => 'language-card',
            'language-card/<id:\d+>' => 'language/view',
            'book/view' => 'book-card',
            'book-card/<id:\d+>' => 'book/view',
            'personality/view' => 'personality-card',
            'personality-card/<id:\d+>' => 'personality/view',
            'publishing-house/view' => 'publishing-house-card',
            'publishing-house-card/<id:\d+>' => 'publishing-house/view',
            'shop/view' => 'shop-card',
            'shop-card/<id:\d+>' => 'shop/view',
            ],
        ],
        
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        'allowedIPs' => ['127.0.0.1', '::1', '*'],
    ];
}

return $config;
