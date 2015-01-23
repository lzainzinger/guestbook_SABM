<?php

return [
    'propel' => [
        'database' => [
            'connections' => [
                'gaestebuch' => [
                    'adapter'    => 'mysql',
                    'classname'  => 'Propel\Runtime\Connection\ConnectionWrapper',
                    'dsn'        => 'mysql:host=localhost;dbname=gaestebuch',
                    'user'       => 'gaestebuch',
                    'password'   => 'gaestebuch',
                    'attributes' => []
                ]
            ]
        ],
        'runtime' => [
            'defaultConnection' => 'gaestebuch',
            'connections' => ['gaestebuch']
        ],
        'generator' => [
            'defaultConnection' => 'gaestebuch',
            'connections' => ['gaestebuch']
        ]
    ]
];
