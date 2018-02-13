<?php
require('Conexao.php');
define('DEBUG', true);
define('_OPTIONS',[
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_CASE => PDO::CASE_NATURAL,
    PDO::ATTR_ORACLE_NULLS => PDO::NULL_EMPTY_STRING
]);
define('DB_DRIVE', 'mysql');
define('DB_HOSTNAME', '127.0.0.1');
define('DB_DATABASE', 'aluraphpcompdo');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');