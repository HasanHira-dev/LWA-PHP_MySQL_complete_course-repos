<?php 
include('config.php');
$pagetitle = "Update User Info";
include('header.php');

$stmt = $pdo->prepare("DELETE FROM users WHERE id=?");
$stmt->execute([$_REQUEST['id']]);
header('location:index.php');
exit;
