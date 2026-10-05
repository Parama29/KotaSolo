<?php
// Salin ke config.php lalu isi kredensial lewat environment variable
// atau langsung di sini (JANGAN commit config.php).
return [
    'db' => [
        'host'     => getenv('RUTESOLO_DB_HOST') ?: 'sql306.infinityfree.com',
        'port'     => (int) (getenv('RUTESOLO_DB_PORT') ?: 3306),
        'name'     => getenv('RUTESOLO_DB_NAME') ?: 'if0_43005606_db',
        'user'     => getenv('RUTESOLO_DB_USER') ?: 'if0_43005606',
        'password' => getenv('RUTESOLO_DB_PASSWORD') ?: 'albijoss',
        'charset'  => getenv('RUTESOLO_DB_CHARSET') ?: 'utf8mb4',
    ],
    'cors_origin' => getenv('RUTESOLO_CORS_ORIGIN') ?: '*',
];
