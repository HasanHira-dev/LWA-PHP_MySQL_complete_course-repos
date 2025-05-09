<?php
include 'config.php';
$pagetitle = 'Home';

$stmt = $pdo->prepare( "SELECT * FROM users" );
$stmt->execute();
$result = $stmt->fetchAll( PDO::FETCH_ASSOC );


include 'header.php';
?>


    <h2 style="padding-block: 20px; color: blue">User List:</h2>
    <table width="100%">
        <tr style="background:#c5e0ff; font-weight: 600;">
            <td>ID</td>
            <td>Name</td>
            <td>Email</td>
            <td>City</td>
            <td>Action</td>
        </tr>
<?php foreach ( $result as $row ): ?>
        <tr class="row--bg">
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['city']; ?></td>
            <td>
                <a class="btn btn__edit" href="edit_user.php?id=<?php echo $row['id']; ?>">Edit</a>
                <a class="btn btn__delete" href="delete.php?id=<?php echo $row['id'] ;?>" onclick="return confirm('Are you sure to want delete this user?');">Delete</a>
            </td>
        </tr>
<?php endforeach; ?>
    </table>

<?php include 'footer.php'; ?>
