<?php
include('config.php');

// Insert Data in a Table
// $stmt = $pdo->prepare( "INSERT INTO students (name,email) VALUES (?,?)" );
// $stmt->execute( ['Hira', 'hasanhira.me@gmail.com'] );

// Delet Data in a Table
// $stmt = $pdo->prepare("DELET FROM students WHERE id=?");
// $stmt->execute([2]);

// Upadate Data in a Table
$stmt = $pdo->prepare("UPDATE students SET name=?, email=? WHERE id=?");
$stmt->execute(['rifat', 'rifat@gmail.com', 2]);