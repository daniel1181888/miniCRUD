<?php include_once("connect.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gewoon pizza</title>
    <link rel="stylesheet" href="css/main.css" />
</head>

<!-- body -->

<body onload="pageLoader()">
    <div id="loader">
        <img id="laadfoto" src="img/PIZZA.png" alt="">
    </div>
    <div id="content">


        <!-- header/nav -->
        <header>
            <nav>
                <a href="index.php">pizzas</a>
                <a href="drinken.php">drinken</a>
                <a href="login.php">login</a>
                <div class="account">
                    <?php 
                if(isset($_POST["submitknop"])){
                    echo "<p id=\"username\">".$_POST["User"]."</p>";
                }
            ?>
                    <img id="profileicon" src="img/round icon.png" alt="">
                    <img id="profileicon" src="img/shopping-cart.png" alt="">
                </div>
            </nav>
        </header>



        <!-- main -->
        <main>
            <img id="gewoonpizza" src="img/gewoonpizza2.png" alt="">
            <div class="items">
                <?php 
                    $sql = "SELECT * FROM menukaart";
                    $stmt = $connect ->
                    prepare($sql);
                    $stmt ->execute();
                    $result = $stmt -> fetchAll();

                    foreach($result as $res) { 
                        echo $res['naam'];
                    }
                ?>
            </div>
        </main>


        <!-- footer -->
        <footer>
            <h1>pizza/footer</h1>
        </footer>
    </div>
    <script src="js/loader.js"></script>
</body>


</html>