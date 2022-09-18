<?php

$db_host = 'localhost';
$db_name = 'project57';
$db_user = 'root';
$db_pass = 'root';
$db_charset = 'utf8';

//data source name
$dsn = "mysql:host={$db_host};dbname={$db_name};charset={$db_charset}"; //不能有任何空格

$pdo_options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
];

//PHP Data Objects
$pdo = new PDO($dsn, $db_user, $db_pass, $pdo_options);

if (! isset($_SESSION)){
    session_start();
}