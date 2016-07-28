<?php

return [
    'components' => [
        'request' => [
            'class' => 'craft\app\web\Request',
            'enableCookieValidation' => true,
        ],
        'response' => 'craft\app\web\Response',
        'session' => 'craft\app\web\Session',
        'urlManager' => [
            'class' => 'craft\app\web\UrlManager',
            'enablePrettyUrl' => true,
            'ruleConfig' => ['class' => 'craft\app\web\UrlRule'],
        ],
        'user' => [
            'class' => 'craft\app\web\User',
            'identityClass' => 'craft\app\elements\User',
            'enableAutoLogin' => true,
            'autoRenewCookie' => true,
        ],
        'errorHandler' => [
            'class' => 'craft\app\web\ErrorHandler',
            'errorAction' => 'templates/render-error'
        ]
    ],
    'modules' => [
        'debug' => [
            'class' => 'yii\debug\Module',
            'allowedIPs' => ['*'],
            'logoHtml' => '<svg width="30px" height="30px" viewBox="0 0 30 30" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g fill="#DA5B47"><path d="M21.5549104,8.56198524 C21.6709104,8.6498314 21.7812181,8.74275447 21.8889104,8.83706217 L23.6315258,7.47013909 L23.6858335,7.39952371 C23.4189104,7.12998524 23.132295,6.87506217 22.8224489,6.64075447 C18.8236796,3.62275447 12.7813719,4.88598524 9.32737193,9.46275447 C5.87321809,14.0393699 6.31475655,20.195216 10.3135258,23.2138314 C13.578295,25.6779852 18.2047565,25.287216 21.6732181,22.5699852 L21.6693719,22.5630622 L20.0107565,21.2621391 C17.4407565,22.9144468 14.252295,23.0333699 11.9458335,21.2927545 C8.87414116,18.9746006 8.53506424,14.245216 11.188295,10.7293699 C13.8419873,7.21398524 18.4832181,6.24367755 21.5549104,8.56198524"></path></g></svg>',
            'panels' => [
                'config' => false,
                'info' => ['class' => 'craft\app\debug\InfoPanel'],
                'request' => ['class' => 'yii\debug\panels\RequestPanel'],
                'log' => ['class' => 'yii\debug\panels\LogPanel'],
                'deprecated' => ['class' => 'craft\app\debug\DeprecatedPanel'],
                'profiling' => ['class' => 'yii\debug\panels\ProfilingPanel'],
                'db' => ['class' => 'yii\debug\panels\DbPanel'],
                'assets' => ['class' => 'yii\debug\panels\AssetPanel'],
                'mail' => ['class' => 'yii\debug\panels\MailPanel'],
            ]
        ]
    ],
];
