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

    <!-- header/nav -->
    <?php include("includes/header.php")?>
    


    <main class="short">
        <div class="login-form">
            <h1>edit form</h1>
            <?php 
                $sql = "SELECT * FROM menukaart WHERE id = :id";
                $stmt = $connect -> prepare($sql);
                $stmt->bindParam(":id",$_GET['id']);
                $stmt ->execute();
                $result = $stmt -> fetchAll();

                foreach($result as $res) { 
                    ?>
                    <form action="php/update.php" method="post">;
                        <p>ID</p>
                        <input type="text" value="<?php echo $res['ID']; ?>" name="id" placeholder="ID">
                        <p>naam</p>
                        <input type="text" value="<?php echo $res["naam"];?>" name="naam" placeholder="naam">
                        <p>prijs</p>
                        <input type="text" value="<?php echo $res["prijs"];?>" name="prijs" placeholder="prijs">
                        <p>fotolink</p>
                        <input type="text" value="<?php echo $res["fotolink"];?>" name="fotolink" placeholder="fotolink">
                        <p>beschrijving</p>
                        <input type="text" value="<?php echo $res["beschrijving"];?>" name="beschrijving" placeholder="beschrijving">
                        <p>category<p>
                        <select name="cat">
                            <option value="0"> eten </option>
                            <option value="1"> drinken </option>
                        </select>
                        <button type="submit" name="submitknop">Update</button>
                    </form>
                <?php }
            ?>
        </div>
    </main>
    <?php include("includes/footer.php")?>
    </div>
    <script src="js/loader.js"></script>
</body>

</html>