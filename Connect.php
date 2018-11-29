<?php
    class Connection{
        public $link, $name;
        
        function __construct($name){
            $this-> name = $name;
        }
    
        public function me(){
            echo "Me " . $this -> name;
        }
    }
?>