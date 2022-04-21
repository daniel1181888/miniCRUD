<?php
include_once("../includes/connect.php");

if(isset($_POST["submitknop"])){  
    $sql = "UPDATE menukaart
    SET prijs = :prijs, beschrijving = :beschrijving, naam = :naam, fotolink = :fotolink, cat = :cat
    WHERE id = :id";
    
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