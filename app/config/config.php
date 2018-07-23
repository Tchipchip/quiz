<?php

return [
    // View settings
    'view' => [
        'template_path' => __DIR__.'/../../src/Templates',
        'twig' => [
            'cache' => false, //__DIR__.'/../storage/cache/twig',
            'debug' => true,
            'auto_reload' => true,
        ],
    ],
    'logger' => [
        'name' => 'app',
        'level' => Monolog\Logger::DEBUG,
        'path' => __DIR__.'/../storage/log/app.log',
    ],
    'settings' => [
        'displayErrorDetails' => true,
    ],
];
