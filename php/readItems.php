<?php 
     include_once("includes/connect.php");

    $sql = "SELECT * FROM menukaart";
    $stmt = $connect -> prepare($sql);
    $stmt ->execute();
    $result = $stmt -> fetchAll();

    foreach($result as $res) {
?>

<div class="itemblok">
    <?php echo "<img id=\"pizza\" src='img/{$res["fotolink"]}'>"; ?>
    <div class = "itemdetails">
        <div class="naam">
            <p><?php echo $res["naam"]; ?></p>
        </div>
        <div class="beschrijving">
            <p><?php echo $res["beschrijving"]; ?></p>
            <button id="toevoegenknop" type="submit" name="submitknop">kopen</button>
        </div> 
    </div>
</div>

<?php 
    }
?>
