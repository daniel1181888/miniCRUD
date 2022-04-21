<?php 
    if(isset($_GET["search"])){
        $search = "%".$_GET['search']."%";

            $sql = "SELECT * FROM menukaart WHERE naam LIKE :search AND cat = 1";
            $stmt = $connect -> prepare($sql);
            $stmt -> bindParam(":search", $search);
        } else {
            $sql = "SELECT * FROM menukaart WHERE cat = 1";
            $stmt = $connect -> prepare($sql);
        }
    

    // $sql = "SELECT * FROM menukaart";
    // $stmt = $connect -> prepare($sql);
    $stmt ->execute();
    $result = $stmt -> fetchAll();

    foreach($result as $res) {
?>

<div class="itemblok">
    <img id="pizza" src="<?php echo $res['fotolink'] ?>">
    <div class="itemdetails">
        <div class="naam">
            <p><?php echo $res["naam"]; ?></p>
        </div>
        <div class="beschrijving">
            <div class="koopknop">
            <button class="toevoegenknop" type="submit" name="submitknop">kopen</button>
            </div>
            <div class="discrp">
                <p><?php echo $res["beschrijving"]; ?></p>
            </div>
        </div>
    </div>
</div>

<?php 
    }
?>