<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/main.css" />
</head>

<!-- body -->

<body>



    <!-- header/nav -->
    <?php include_once("header.php")?>




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
        <h1>footer/drinken</h1>
    </footer>
</body>

</html>