<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Assignment | <?php echo $pagetitle; ?></title>
    <style>
        * {margin: 0; padding: 0; box-sizing: border-box;}
        body {font-family: sans-serif; font-size: 16px;}
        ul {margin: 0; padding: 0;} li {list-style: none;} a {text-decoration: none; color: inherit;}
        nav ul {display: flex; justify-content: space-between;} nav li { padding: 0 3rem;}
        nav a {font-family: sans-serif; font-size: 1.2rem; font-weight: 700;
            &:hover{text-decoration: underline;} }
        table td { font-size: 1.3rem; padding: 8px 15px; }
        button {border: transparent; border-radius: 3px;}
        tr.row--bg:nth-child(odd) {background: #f8efff;}
        .container {width: 80%; margin: auto;}
        .btn {padding: 5px 10px; border-radius: 3px; color: white; font-size: 1.2rem;}
        .btn__edit { background: lightseagreen; &:hover{background: green};}
        .btn__delete { background: lightcoral; &:hover{background: red}}
        .msg{position: absolute; padding: 10px; border-radius: 3px; font-size: 1.15rem; left: 29%; top: 15px;}
        .msg__error{color: red; background: #ffebee; }
        .msg__success{color: green; background: #d7ffef; }
    </style>
</head> 
<body>
    <header class="container" style="text-align: center; color: darkblue; background: #f1f1f1;">
        <h1 style="padding-top: 20px;">Crud Assignment</h1>
        <nav style="background:#dcf7fb; margin-top: 2rem; padding-block: 10px; border-top: 1px solid #a0e3ed;">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="register_user.php">Register New User</a></li>
            </ul>
        </nav>
    </header>
    <main style="position: relative;">
        <div class="container">