<?php
return [
    'backend' => [
        'frontName' => 'admin_12kae9'
    ],
    'crypt' => [
        'key' => '73ddb37fc8dcaa382d9f629c08fe14b4'
    ],
    'db' => [
        'table_prefix' => '',
        'connection' => [
            'default' => [
                'host' => 'localhost',
                'dbname' => 'magentodb4',
                'username' => 'magentouser',
                'password' => 'Magento046ewr43953@#',
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
        'config' => 1,
        'layout' => 1,
        'block_html' => 1,
        'collections' => 1,
        'reflection' => 1,
        'db_ddl' => 1,
        'eav' => 1,
        'customer_notification' => 1,
        'config_integration' => 1,
        'config_integration_api' => 1,
        'full_page' => 1,
        'config_webservice' => 1,
        'translate' => 1,
        'compiled_config' => 1
    ],
    'install' => [
        'date' => 'Fri, 23 Nov 2018 08:42:39 +0000'
    ]
];
