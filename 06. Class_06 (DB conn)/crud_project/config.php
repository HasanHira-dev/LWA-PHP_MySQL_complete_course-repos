<?php 

$dbhost = 'localhost';
$dbname = 'lwa_php';
$dbuser = 'root';
$dbpass = '';

try{
    $pdo = new PDO("mysql:host={$dbhost};dbname={$dbname}", $dbuser, $dbpass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $exception){
    "Connenction Error: ". $exception->getMessage();
}