<?php
$dbhost = 'localhost';
$dbname = 'crud_assignment';
$dbuser = 'root';
$dbpass = '';

try {
    $pdo = new PDO( "mysql:host={$dbhost};dbname={$dbname}", $dbuser, $dbpass );
    $pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
} catch ( PDOException $exeption ) {
    "Connection error" . $exception->getMessage();
}