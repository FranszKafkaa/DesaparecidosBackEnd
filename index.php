<?php
    include "Connect.php";

    $classme = new Connection();
    
    if(isset($_GET['idUser'])){
        $classme -> GettingInfo($_GET['idUser']);
    }else{
        $classme -> Open();
    }

?>
