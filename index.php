<?php
    
    include "Connect.php";

    $classme = new Connection();

    
    
    if(isset($_GET["id"])){
        $classme -> Load_Images($_GET['id']);
    }else{
        $classme -> Open();
    }
    
?>
