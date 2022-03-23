<?php include_once("connect.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login form</title>
    <link rel="stylesheet" href="css/main.css" />
</head>

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
                <img id="profileicon" src="img/shopping-cart.png" alt="">
            </div>
        </nav>
    </header>


    <main class="short">
        <div class="login-form">
            <h1>add items form</h1>
            <form>
                <p>item naam</p>
                <input type="text" placeholder="item">
                <p>foto van item</p>
                <input type="file">
                <p>item beschrijving</p>
                <input type="text" placeholder="beschrijving">
                <button type="submit" name="submitknop">add</button>
            </form>
        </div>
        <img id="gewoonpizza" src="img/gewoonpizza2.png" alt="">
        <div class="asortiment">
            <h1>asortiment</h1>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Prijs</th>
                    <th>beschrijving</th>
                    <th>naam</th>
                </tr>
                <?php 
                    $sql = "SELECT * FROM menukaart";
                    $stmt = $connect -> prepare($sql);
                    $stmt ->execute();
                    $result = $stmt -> fetchAll();

                    foreach($result as $res) {
                        echo "<tr>";
                        echo "<td>".$res["ID"]."</td>";
                        echo "<td>".$res["prijs"]."</td>";
                        echo "<td>".$res["beschrijving"]."</td>";
                        echo "<td>".$res["naam"]."</td>";
                        echo "</tr>";
                    }
                ?>
            </table>
        </div>
    </main>
    <footer>
        <h1>pizza/footer</h1>
    </footer>
    <script src="js/login.js"></script>
</body>

</html>