<?php
    include_once("includes/connect.php"); 
    session_start();

    if(isset($_POST["user"])){
        $_SESSION["username"] = $_POST["user"];
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drinken</title>
    <link rel="stylesheet" href="css/main.css" />
</head>

<!-- body -->

<body onload="pageLoader()">
    <div id="loader">
        <img id="laadfoto" src="img/PIZZA.png" alt="">
    </div>
    <div id="content">


        <!-- header/nav -->
        <?php include("includes/header.php")?>



        <!-- main -->
        <main>
             <div id="zoekbar">
                <form action="#" method = "get">
                    <input id="zoekinput" type="text" placeholder="Search.." name="search">
                    <button id="zoekknop" type="submit" name="zoek">Submit</button>
                </form>
             </div>
            
            <img id="gewoonpizza" src="img/gewoonpizza2.png" alt="">
            <div class="items">
                <?php include("php/readItemsdrinken.php")?>
            </div>
        </main>


        <!-- footer -->
        <?php include("includes/footer.php")?>
    </div>

    <!-- Scripts -->
    <script src="js/loader.js"></script>
</body>

</html>