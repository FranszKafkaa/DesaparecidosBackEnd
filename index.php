<?php
    include "Connect.php";

    $classme = new Connection("Marcelo Janke");

    $classme -> me();
    $out = shell_exec("uname -r");

    echo "<br>" . $out;
?>
