<?php
    class Connection{
        public $link, $name;
        
        function __construct($name){
            $this -> name = $name;

            $this -> link = new mysqli
            ("h2cwrn74535xdazj.cbetxkdyhwsb.us-east-1.rds.amazonaws.com",
            "c7ogmojcci3nrmwp","usx7egblsam3bm7c","mr9tugmt9iix0e3z");

        }
    
        public function Open(){
            $query = "SELECT * FROM Pessoa";

            $res = $this-> link -> query($query);

            while($linha = $res -> fetch_array()){
                echo $linha['nome'] . "<br>";
            }

            echo "Me " . $this -> name;

        }
    }
?>