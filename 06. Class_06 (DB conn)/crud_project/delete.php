<?php 
    include('config.php');

    $stmt = $pdo->prepare("DELETE FROM students WHERE id=?");
    $stmt->execute([$_REQUEST['id']]);

    // Redirect
    header('location: index.php');
    exit;