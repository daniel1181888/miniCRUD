<?php include_once("includes/connect.php"); 
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login form</title>
    <link rel="stylesheet" href="css/main.css" />
</head>

<body onload="pageLoader()">
    <div id="loader">
        <img id="laadfoto" src="img/PIZZA.png" alt="">
    </div>
    <div id="content">

    <!-- header/nav -->
    <?php include("includes/header.php")?>
    


    <main class="short">
        <div class="login-form">
            <h1>login form</h1>
            <form action="php/validate.php" method="post">
                <p>Username</p>
                <input id="username" type="text" oninput="changeColor(this.value)" name="username" placeholder="username">
                <p>password</p>
                <input id="password" name="password" type="password" oninput="changeColor(this.value)" placeholder="password">
                <button type="submit" name="submitknop">login</button>
            </form>
        </div>
    </main>
    <?php include("includes/footer.php")?>
    </div>
    <script src="js/loader.js"></script>
    <script src="js/validateForm.js"></script>
</body>

</html>