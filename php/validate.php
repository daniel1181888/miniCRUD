<?php
session_start();
include_once("../includes/connect.php");

$sql = "SELECT * FROM user";
$stmt = $connect->prepare($sql);
$stmt->execute();

if ($stmt->rowCount() > 0) {
    while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
        if($_POST["username"] == $result["username"]){
            if ($_POST["password"] == $result["password"])
                $_SESSION["username"] = $result["username"];
                $_SESSION["roll"] = $result["roll"];
                header("Location: ../index.php");
                exit;
        }
    }
}
?>
