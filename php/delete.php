<?php
include_once("../includes/connect.php");

if(isset($_GET["id"])){  
    $sql = "DELETE FROM menukaart
    where id = :id";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(":id", $_GET['id']);
    $stmt->execute();
}

header("Location: ../admin.php");


?>