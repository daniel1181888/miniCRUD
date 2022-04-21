<?php include_once("includes/connect.php"); ?>

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
            <h1>edit form</h1>
            <?php 
                $sql = "SELECT * FROM menukaart";
                $stmt = $connect -> prepare($sql);
                $stmt ->execute();
                $result = $stmt -> fetchAll();

                foreach($result as $res) {
                    echo "<p>".$res["ID"]."</p>";
                    echo "<p>".$res["naam"]."</p>";
                    echo "<p>".$res["prijs"]."</p>";
                    echo "<p>".$res["beschrijving"]."</p>";
                }
            ?>

            <form action="php/update.php" method="post">
                <p>ID</p>
                <input type="text" name="id" placeholder="ID">
                <p>naam</p>
                <input type="text" name="naam" placeholder="naam">
                <p>prijs</p>
                <input type="text" name="prijs" placeholder="prijs">
                <p>beschrijving</p>
                <input type="text" name="beschrijving" placeholder="beschrijving">
                <button type="submit" name="submitknop">Update</button>
            </form>
        </div>
    </main>
    <?php include("includes/footer.php"); ?>
    </div>

    <!-- Scripts -->
    <script src="js/loader.js"></script>
</body>

</html>