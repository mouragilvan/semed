<?php 

return [
    'segsemed' => [
        'driver' => 'oracle',
        'tns' => env('DB_TNS', ''),
        'host' => env('DB_HOST', ''),
        'port' => env('DB_PORT', '1521'),
        'database' => env('SEG_DATABASE', 'xe'),
        'service_name' => env('SEG_SERVICE_NAME', ''),
        'username' => env('SEG_USERNAME', 'SYSTEM'),
        'password' => env('SEG_PASSWORD', 'Brasil@123'),
        'charset' => env('SEG_CHARSET', 'AL32UTF8'),
        'prefix' => env('SEG_PREFIX', ''),
        'prefix_schema' => env('SEG_SCHEMA_PREFIX', ''),
        'edition' => env('SEG_EDITION', 'ora$base'),
        'server_version' => env('SEG_SERVER_VERSION', '11g'),
        'load_balance' => env('SEG_LOAD_BALANCE', 'yes'),
        'max_name_len' => env('ORA_MAX_NAME_LEN', 30),
        'dynamic' => [],
        'sessionVars' => [
            'NLS_TIME_FORMAT' => 'HH24:MI:SS',
            'NLS_DATE_FORMAT' => 'YYYY-MM-DD HH24:MI:SS',
            'NLS_TIMESTAMP_FORMAT' => 'YYYY-MM-DD HH24:MI:SS',
            'NLS_TIMESTAMP_TZ_FORMAT' => 'YYYY-MM-DD HH24:MI:SS TZH:TZM',
            'NLS_NUMERIC_CHARACTERS' => '.,',
        ],
    ],
];