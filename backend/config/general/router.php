<?php
return [
    'enablePrettyUrl' => true,
    'enableStrictParsing' => false,
    'showScriptName' => false,
    'rules' => [
        [
            'class' => 'yii\rest\UrlRule',
            'controller' => ['v1/user'],
            'extraPatterns' => [
                'login' => 'login',
                'POST  user/<id:\d+>' => 'user',
                'POST check-user' => 'checkUser'
            ]
        ],
    ]
];
