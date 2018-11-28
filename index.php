<?php
    include "Connect.php";

    $classme = new Connection("Marcelo Janke");

    //$classme -> me();

    $oi = "nao posso mae";


    $out = shell_exec("ls -la");

    echo "<br>" . $out;
    //$oi = str_split($oi);

    echo $oi[1];     
    $count = 0;
    // foreach($oi as $i){
    //     $count++;
    //     if($count > 3){
    //         echo $i . "\n";
    //         $count = 0;
    //     }else{
    //         echo $i;
    //     }

    // }

?>
