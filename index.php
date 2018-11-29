<?php
    
    include "Connect.php";

    $classme = new Connection();

    $classme -> Open();
    
    if(isset($_GET["id"])){
        $classme -> Load_Images($_GET['id']);
    }
    
?>
