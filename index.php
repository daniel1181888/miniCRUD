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

<body>



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
            </div>
        </nav>
    </header>



    <!-- main -->
    <main>
        <img id="gewoonpizza" src="img/gewoonpizza2.png" alt="">
        <div class="items">
            <?php include("item.php")?>
            <?php include("item.php")?>
            <?php include("item.php")?>
            <?php include("item.php")?>
        </div>
    </main>


    <!-- footer -->
    <footer>
        <h1>pizza/footer</h1>
    </footer>
</body>
<script src="js/login.js"></script>

</html>