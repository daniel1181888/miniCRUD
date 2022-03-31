<?php 
    include_once("includes/connect.php");
    $pdo = pdo_connect_mysql();
    $msg = '';
    
    if (!empty($_POST)) {
        
        $id = isset($_POST['id']) && !empty($_POST['id']) && $_POST['id'] != 'auto' ? $_POST['id'] : NULL;
        
        $prijs = isset($_POST['name']) ? $_POST['name'] : '';
        $beschrijving = isset($_POST['email']) ? $_POST['email'] : '';
        $naam = isset($_POST['phone']) ? $_POST['phone'] : '';
        $created = isset($_POST['created']) ? $_POST['created'] : date('Y-m-d H:i:s');
        
        
        $stmt = $pdo->prepare('INSERT INTO menukaart VALUES (?, ?, ?, ?, ?, ?)');
        $stmt->execute([$id, $name, $email, $phone, $title, $created]);
        
        
        $msg = 'Created Successfully!';
    }
?>