<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-backend',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log'],
    'modules' => require __DIR__ . '/general/modules.php',
    'components' => [
        'log' => require(__DIR__ . '/general/log.php'),
        'request' => require(__DIR__ . '/general/request.php'),
        'response' => require(__DIR__ . '/general/response.php'),
        'urlManager' => require(__DIR__ . '/general/router.php'),
        'user' => [
            'identityClass' => 'backend\modules\v1\models\User',
            'enableSession' => false,
            'loginUrl' => null
        ],
        'session' => [
            'name' => 'advanced-backend',
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],

],
    'params' => $params,
];
