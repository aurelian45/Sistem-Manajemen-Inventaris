<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'db_inventory');
define('DB_PORT', '3306');

function getConn(): \mysqli
{

    $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME, DB_PORT);

    return $conn;
}

if (getConn()->connect_error) {
    die('Failed to Connect Database : ' . getConn()->connect_error);
}
