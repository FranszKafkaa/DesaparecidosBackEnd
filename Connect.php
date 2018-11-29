<?php
    class Connection{
        
        function __construct($name){
            echo "in class we trust " . $name . "\n";
            //$this -> link = new mysqli("127.0.0.1","root","Valdisnei123","PJR_Desaparecidos"); 
        }
        public function me(){
            echo "Me " . $this -> name;
        }
    }
?>