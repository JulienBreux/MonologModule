<?php

return [
    'service_manager' => [
        'abstract_factories' => [
            'MonologModule\ServiceFactory\AbstractMonologServiceFactory',
        ],
        'aliases'    => [
            'monolog' => 'MonologModule\ServiceFactory\AbstractMonologServiceFactory',
        ],
    ],
];
