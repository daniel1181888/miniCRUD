<?php 
    include_once("includes/connect.php");

   $sql = "SELECT * FROM menukaart";
   $stmt = $connect -> prepare($sql);
   $stmt ->execute();
   $result = $stmt -> fetchAll();

   foreach($result as $res) {
?>