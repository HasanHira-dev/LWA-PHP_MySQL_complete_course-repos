<?php
    include("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Project</title>
</head>
<body>
    <h1>Crud Project</h1>
    <hr>
    <h2>All Students</h2>
    <a href="index.php">Show All Students</a> | <a href="register.php">Register new</a>
    <br><br>
    <table style="width: 100%" cellpadding="10" border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $stmt = $pdo->prepare("SELECT * FROM students");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach($result as $row) {?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
                    <a href="delete.php?id=<?php echo $row['id']; ?>" onclick = "return confirm('Are you sure to want delete this student?');">Delete</a>
                </td>
            </tr>
        <?php }; ?>

        </tbody>
    </table>
</body>
</html>