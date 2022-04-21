<?php 
    include_once("includes/connect.php"); 
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

    <!-- Header/Nav -->
    <?php include("includes/header.php")?>
    
    <!-- Main -->
    <main class="short">
        <div class="login-form">
            <h1>login form</h1>
            <form action="php/validate.php" method="post">
                <p>Username</p>
                <input type="text" name="username" placeholder="username">
                <p>password</p>
                <input type="password" name="password" placeholder="password">
                <button type="submit" name="submitknop">login</button>
            </form>
        </div>
    </main>

    <!-- Footer -->
    <?php include("includes/footer.php"); ?>
    </div>

    <!-- Scripts -->
    <script src="js/loader.js"></script>
    <script src="js/validateForm.js"></script>
</body>

</html>