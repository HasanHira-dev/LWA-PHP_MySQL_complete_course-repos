<?php 
    include('config.php');

    // echo $_REQUEST['id'];

    if(isset($_POST['update_form'])){
        try {
            if(isset($_POST['name']) == ''){
                throw new Exception("Name cannot be empty!");
            }
            if(isset($_POST['email']) == ''){
                throw new Exception("Email cannot be empty!");
            }
            if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
                throw new Exception("Enter a valid email.");
            }

            $stmt = $pdo->prepare("SELECT * FROM students WHERE email=? AND id!=?");
            $stmt->execute([$_POST['email'], $_REQUEST['id']]);
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            if($result){
                throw new Exception("Email is already exists.");
            }

            $stmt = $pdo->prepare("UPDATE students SET name=?, email=? WHERE id=?");
            $stmt->execute([$_POST['name'], $_POST['email'], $_REQUEST['id']]);

            $success_message = "Your changes update successfully.";

        }
        catch(Exception $exception){
            $error_message = $exception->getMessage();
        }
    }



    $stmt = $pdo->prepare("SELECT * FROM students WHERE id=?");
    $stmt->execute([$_REQUEST['id']]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student Information</title>
</head>
<body>
<h1>Crud Project</h1>
    <hr>
    <h2>Register New Student</h2>
    <a href="index.php">Show All Students</a> | <a href="register.php">Register new</a>
    <br><br>
    <?php
        if(isset($error_message)){
        ?>
        <div style="color:red">
            <?php echo $error_message; ?>
        </div>
        <?php
        } 
        if(isset($success_message)){
        ?>
        <div style="color:green">
            <?php echo $success_message; ?>
        </div>
        <?php
        }
        ?>
    <form action="" method="post">
        <table style="width: 50%" cellpadding="5" border="0">
            <tr>
                <td>Name :</td>
                <td>
                    <input type="text" name="name" value="<?php echo $result['name'] ;?>">
                </td>
            </tr>
            <tr>
                <td>Email :</td>
                <td>
                    <input type="email" name="email" value="<?php echo $result['email'] ;?>">
                </td>
            </tr>
            <tr>
                <td></td>
                <td><button type="submit" name="update_form">Update</button></td>
            </tr>
        </table>
    </form>
</body>
</html>
</body>
</html>