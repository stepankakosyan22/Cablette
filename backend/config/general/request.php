<?php

return [
    'class' => '\yii\web\Request',
//    'baseUrl'=>'/admin',
    'enableCookieValidation' => false,
    'parsers' => [
        'application/json' => 'yii\web\JsonParser'
    ]
];