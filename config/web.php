<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'language' => 'es',
    'bootstrap' => ['log'],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'BZHrOHgBRo6pEH4Bs58tWsyNSIOr2469',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
            'enableSession' => true,
        ],
        'errorHandler'=>[
            'errorAction'=>'SiteController/error',
        ],
        'response' => [
			'formatters' => [
				'pdf' => [
                    'class' => 'robregonm\pdf\PdfResponseFormatter',
                    'mode' => '', // Optional
					'format' => 'A4',  // Optional but recommended. http://mpdf1.com/manual/index.php?tid=184
					//'defaultFontSize' => 0, // Optional
					//'defaultFont' => '', // Optional
					'marginLeft' => 15, // Optional
					'marginRight' => 15, // Optional
					'marginTop' => 16, // Optional
					'marginBottom' => 16, // Optional
					'marginHeader' => 9, // Optional
					'marginFooter' => 9, // Optional
					'orientation' => 'Landscape', // optional. This value will be ignored if format is a string value.
					/*'options' => [
						// mPDF Variables
						// 'fontdata' => [
							// ... some fonts. http://mpdf1.com/manual/index.php?tid=454
						// ]
					]*/
				],
			]
		],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            //'useFileTransport' => false,
            /*'transport' => [
                'class' => 'yii\swiftmailer\Mailer',
                'host' => 'smtp.mail.yahoo.com',  // ej. smtp.mandrillapp.com o smtp.gmail.com
                'username' => 'ferfff@yahoo.com.mx',
                'password' => '',
                'port' => '25', // El puerto 25 es un puerto común también
                //'encryption' => 'tls', // Es usado también a menudo, revise la configuración del servidor
            ],*/
        ],
        'authManager' => [
            'class' => 'yii\rbac\PhpManager',
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
        'db' => $db,
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                ['class' => 'yii\rest\UrlRule', 'controller' => 'user'],
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
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];
}

return $config;
