<?php
return [
    'backend' => [
        'frontName' => 'admin'
    ],
    'crypt' => [
        'key' => '27c30d2fdcf96c71373901a356b2057b'
    ],
    'db' => [
        'table_prefix' => '',
        'connection' => [
            'default' => [
                'host' => 'localhost',
                'dbname' => 'zesad_db',
                'username' => 'root',
                'password' => '7410',
                'active' => '1'
            ]
        ]
    ],
    'resource' => [
        'default_setup' => [
            'connection' => 'default'
        ]
    ],
    'x-frame-options' => 'SAMEORIGIN',
    'MAGE_MODE' => 'developer',
    'session' => [
        'save' => 'files'
    ],
    'cache_types' => [
        'config' => 0,
        'layout' => 0,
        'block_html' => 0,
        'collections' => 0,
        'reflection' => 0,
        'db_ddl' => 0,
        'eav' => 0,
        'customer_notification' => 0,
        'config_integration' => 0,
        'config_integration_api' => 0,
        'full_page' => 0,
        'config_webservice' => 0,
        'translate' => 0
    ],
    'install' => [
        'date' => 'Tue, 27 Nov 2018 22:33:42 +0000'
    ]
];
