<?php
include_once("../includes/connect.php");

if(isset($_POST["submitknop"])){  
    $sql = "INSERT INTO menukaart (id, naam, beschrijving, prijs,fotolink,cat)
            VALUES (:id,:naam,:beschrijving,:prijs,:fotolink,:cat)";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(":id", $_POST['id']);
    $stmt->bindParam(":prijs", $_POST['prijs']);
    $stmt->bindParam(":fotolink", $_POST['fotolink']);
    $stmt->bindParam(":cat", $_POST['cat']);
    $stmt->bindParam(":beschrijving", $_POST['beschrijving']);
    $stmt->bindParam(":naam", $_POST['naam']);
    $stmt->execute();
}

header("Location: ../admin.php");


?>