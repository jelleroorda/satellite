<?php

return [
    'dsn' => env('STATVIEW_DSN'),

    'domain' => env('STATVIEW_DOMAIN'),

    'path' => env('STATVIEW_PATH', 'statview/satellite'),

    'middleware' => [
        \Statview\Satellite\Http\Middleware\ValidateRequest::class,
    ],

    'api_key' => env('STATVIEW_API_KEY'),

    'project_id' => env('STATVIEW_PROJECT_ID'),

    'monitors' => [
        'cron' => true,

        'queue' => true,
    ],

    'endpoint' => env('STATVIEW_ENDPOINT', 'https://statview.app'),
];
