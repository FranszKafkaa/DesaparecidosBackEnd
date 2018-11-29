<?php
    class Connection{
        public $link;
        
        function __construct($name){

            $this -> link = new mysqli
            ("h2cwrn74535xdazj.cbetxkdyhwsb.us-east-1.rds.amazonaws.com",
            "c7ogmojcci3nrmwp","usx7egblsam3bm7c","mr9tugmt9iix0e3z");

        }
    
        public function Open(){
            $query = "SELECT * FROM Pessoa";

            $res = $this-> link -> query($query);

            $linha = $res -> fetch_array();

            echo json_encode($linha['nome']);


        }
    }
?>