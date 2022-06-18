<?php

$driver = 'mysql';
$host = 'localhost';
$db_name = 'mysite';
$db_username = 'root';
$db_pass = 'mysql';
$charset = 'utf8';
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];

try {
  $pdo = new PDO (
    "$driver:host=$host;dbname=$db_name;charset=$charset",
    $db_username, $db_pass, $options
  );
}catch (PDOException $i) {
  die("Ошибка подключения к базе данных");
}



