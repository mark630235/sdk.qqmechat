<?php

return [
    'response_type' => env('QMECHAT_APIGATEWAY_RESPONSE_TYPE', 'collection'),
    'secret_id' => env('QMECHAT_APIGATEWAY_SECRET_ID', 'your-secret-id'),
    'secret_key' => env('QMECHAT_APIGATEWAY_SECRET_KEY', 'your-secret-key'),
    'log' => [
        'file' => storage_path('qmechat/apigateway-qmechat.log'),
        'level' => 'debug',
    ],
    'http' => [
        'base_uri' => env('QMECHAT_APIGATEWAY_HTTP_BASE_URI'),
    ],
];