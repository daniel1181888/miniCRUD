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
                <!-- <img id="profileicon" src="img/round icon.png" alt=""> -->
                <a href="shoppingcart.php"><img id="profileicon" src="img/shopping-cart.png" alt=""></a>
            </div>
        </nav>
    </header>

    <!-- Main -->
    <main class="short">
        <div class="asortiment">
            <h1>winkelwagen</h1>
            <form>
                <tr>
                    <th>ID</th>
                    <th>Prijs</th>
                    <th>beschrijving</th>
                    <th>naam</th>
                </tr>
                <button id ="toevoegenknop"  type ="submit" name="submitknop">bestel</button>
            </form>
        </div>
    </main>

    <!-- Footer -->
    <?php include_once("includes/footer.php"); ?>
    </div>

    <!-- Scripts -->
    <script src="js/loader.js"></script>
</body>

</html>