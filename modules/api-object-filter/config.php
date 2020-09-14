<?php

return [
    '__name' => 'api-object-filter',
    '__version' => '0.0.1',
    '__git' => 'git@github.com:getmim/api-object-filter.git',
    '__license' => 'MIT',
    '__author' => [
        'name' => 'Iqbal Fauzi',
        'email' => 'iqbalfawz@gmail.com',
        'website' => 'https://iqbalfn.com/'
    ],
    '__files' => [
        'modules/api-object-filter' => ['install','update','remove']
    ],
    '__dependencies' => [
        'required' => [
            [
                'api' => NULL
            ],
            [
                'lib-app' => NULL
            ]
        ],
        'optional' => []
    ],
    'autoload' => [
        'classes' => [
            'ApiObjectFilter\\Controller' => [
                'type' => 'file',
                'base' => 'modules/api-object-filter/controller'
            ],
            'ApiObjectFilter\\Iface' => [
                'type' => 'file',
                'base' => 'modules/api-object-filter/interface'
            ],
            'ApiObjectFilter\\Library' => [
                'type' => 'file',
                'base' => 'modules/api-object-filter/library'
            ]
        ],
        'files' => []
    ],
    'routes' => [
        'api' => [
            'apiObjectFilter' => [
                'path' => [
                    'value' => '/-/object/filter'
                ],
                'method' => 'GET',
                'handler' => 'ApiObjectFilter\\Controller\\Filter::filter'
            ]
        ]
    ],
    'apiObjectFilter' => [
        'filters' => [
            'handlers' => [
                'timezone' => 'ApiObjectFilter\\Library\\TimezoneFilter'
            ]
        ]
    ]
];