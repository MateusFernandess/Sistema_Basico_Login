<?php
//Conex�o com o Banco de dados

$dsn = "mysql:dbname=test;host=localhost";
$dbuser = "root";
$dbpass = "";

try {

    $pdo = new PDO ($dsn, $dbuser, $dbpass);


} catch (PDOException $e) {
    echo "Falha na Conex�o";
};