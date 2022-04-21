<?php
    include_once("includes/connect.php");
    session_start();

    if(isset($_SESSION["roll"])){
        if($_SESSION["roll"]!="admin") {
            header("Location: ../index.php");
            exit;
        }
    }
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

<body>

    <!-- header/nav -->

    <?php include("includes/header.php")?>

    <?php
    $sql = "SELECT * 
    FROM menukaart 
    WHERE ID = :ID";
    $stmt = $connect -> prepare($sql);
    $stmt -> bindParam(":ID", $_GET["ID"]);
    $stmt -> execute();
    $result = $stmt -> fetchAll();
    ?>

    <main class="short">
        <div class="login-form">
            <h1>add items form</h1>
            <form action="php/create.php" method="post">
                <p>item naam</p>
                <input type="text"  name = "naam" placeholder="item">
                <p>prijs</p>
                <input type="text"  name ="prijs" placeholder="prijs">
                <p>foto van item</p>
                <input type="file">
                <p>item beschrijving</p>
                <input type="text"  name = "beschrijving" placeholder="beschrijving">
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
                    <th>aanpassen</th>
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
                        echo "<td><button id = 'editbutton'><a href='edit.php?id={$res['ID']}'><img id  = 'editicon' src='img/edit.png'></a></button> <button id = 'editbutton'><a href='php/delete.php?id={$res["ID"]}'><img id  = 'editicon' src='img/delete.png'></a></button> </td>";
                        echo "</tr>";
                    }
                ?>
            </table>
        </div>
    </main>

    <!-- Footer -->
    <?php include("includes/footer.php"); ?>

    <!-- Scripts -->
    <script src="js/login.js"></script>
</body>

</html>