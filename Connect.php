<?php
    class Connection{
        public $link, $name;
        
        function __construct($name){
            $this -> name = $name;

            $this -> link = new mysqli("h2cwrn74535xdazj.cbetxkdyhwsb.
            us-east-1.rds.amazonaws.com","c7ogmojcci3nrmwp",
            "usx7egblsam3bm7c","mr9tugmt9iix0e3z");

            if($this-> link -> connect_error){
                echo "nao main";
            }else{
                echo "Foi";
            }
        }
    
        public function Open(){
            echo "Me " . $this -> name;
            
        }
    }
?>