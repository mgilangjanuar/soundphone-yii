<?php

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'pgsql:host=ec2-23-21-204-166.compute-1.amazonaws.com;dbname=d8h70978art8gc',
    'username' => 'ksqmjpgrqepccd',
    'password' => '1e23d732e325ac84c3439f833da1e703e2fda6a14e1e831e4826b9b2331dab5f',
    'charset' => 'utf8',
    'schemaMap' => [
        'pgsql'=> [
            'class'=>'yii\db\pgsql\Schema',
            'defaultSchema' => 'soundphone'
        ]
    ],
    'on afterOpen' => function ($event) {
        $event->sender->createCommand("SET search_path TO soundphone")->execute();
    }
];

