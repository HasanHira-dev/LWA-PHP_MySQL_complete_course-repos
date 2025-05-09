<?php
    include("config.php");

    if(isset($_POST['register_form']))
    {

        try{
            if($_POST['name'] == ''){
                throw new Exception('Name cannot be emply!');
            }
            if($_POST['email'] == ''){
                throw new Exception('Email cannot be emply!');
            }
            // Valid email check
            if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
                throw new Exception('Enter a valid email.');
            }

            // If email are exists
            $stmt = $pdo->prepare("SELECT * FROM students WHERE email=?");
            $stmt->execute([$_POST['email']]);
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            if($result){
                throw new Exception('Email already exist.');
            }

            $stmt = $pdo->prepare("INSERT INTO students (name, email) VALUES (?, ?)");
            $stmt->execute([$_POST['name'], $_POST['email']]);

            $success_message = "New student register successfully.";

        }
        catch(Exception $exception){
            $error_message = $exception->getMessage();
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register new students</title>
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
                    <input type="text" name="name">
                </td>
            </tr>
            <tr>
                <td>Email :</td>
                <td>
                    <input type="email" name="email">
                </td>
            </tr>
            <tr>
                <td></td>
                <td><button type="submit" name="register_form">Register</button></td>
            </tr>
        </table>
    </form>
</body>
</html>
</body>
</html>