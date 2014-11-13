<?php

return [
    'service_manager' => [
        'invokables' => [
            'MonologModule\ServiceFactory\MonologLoggerService',
        ],
        'aliases'    => [
            'monolog.logger' => 'MonologModule\ServiceFactory\MonologLoggerService',
            'logger'         => 'MonologModule\ServiceFactory\MonologLoggerService',
        ],
    ],
];
