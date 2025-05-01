<?php
    require("inc/header.php");
?>


<p style="color: darkslategrey; font-size: 1.5rem; text-transform: capitalize; margin-bottom: 30px;">Contact Form</p>

<form action="" method="POST">
    Your Name: <br>
    <input type="text" name="user_name" value="<?php if(isset($_POST['user_name'])){ echo $_POST['user_name'];} ?>" autocomplete="off" autofocus><br><br>
    Your Name: <br>
    <input type="email" name="user_email" required value="<?php if(isset($_POST['user_email'])){ echo $_POST['user_email'];} ?>" autocomplete="off" autofocus><br><br>
    <button type="submit" name="contact_form">Submit</button>
    <br><br>
</form>

<h2>Output: </h2>
<p style="font-size: 2rem;">

<?php

if(isset($_REQUEST['user_name'])){
    echo $_REQUEST['user_name']. "<br>";
    echo $_REQUEST['user_email'];
}


?>




</p>







<?php
    require("inc/footer.php");
?>