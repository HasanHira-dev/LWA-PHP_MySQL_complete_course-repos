<?php 
include('config.php');
$pagetitle = "Register User";
include('header.php');

if(isset($_POST['reg_user_form'])){

    try{
        if($_POST['name'] == ''){
            throw new Exception("Name cannot be empty!");
        }
        if($_POST['email'] == ''){
            throw new Exception("Email cannot be empty!");
        }
        if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
            throw new Exception("Enter a valid email!");
        }
        $stmt = $pdo->prepare("SELECT * FROM users WHERE email=?");
        $stmt->execute([$_POST['email']]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if($result){
            throw new Exception("The email has already exists.");
        }

        // Insert data
        $stmt = $pdo->prepare("INSERT INTO users (name, email, city) VALUES (?, ?, ?)");
        $stmt->execute([$_POST['name'], $_POST['email'], $_POST['city']]);

        $success_message = "Registration successful.";

    }
    catch(Exception $exception){
        $error_message = $exception->getMessage();
    }

}

?>

<h2 style="padding-block: 20px; color: blue;">Register a new user:</h2>

<?php 
    if(isset($error_message)):
?>
    <div class="msg msg__error">
        <?php echo $error_message; ?>
    </div>
<?php
    endif;
    if(isset($success_message)):
?>
    <div class="msg msg__success">
        <?php echo $success_message;?>
    </div>
<?php endif; ?>

<form action="" method="post">
    <table>
        <tr>
            <td>Name:</td>
            <td><input type="text" name="name" autocomplete="off" autofocus></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><input type="email" name="email" autocomplete="off" autofocus></td>
        </tr>
        <tr>
            <td>City:</td>
            <td><input type="text" name="city" autocomplete="off" autofocus></td>
        </tr>
        <tr>
            <td></td>
            <td><button class="btn btn__edit" name="reg_user_form" type="submit">Submit</button></td>
        </tr>
    </table>
</form>


<?php include('footer.php'); ?>