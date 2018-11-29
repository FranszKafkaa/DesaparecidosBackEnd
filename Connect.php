 <?php
    class Connection{
        private $link;
        
        function __construct(){

            $this -> link = new mysqli
            ("h2cwrn74535xdazj.cbetxkdyhwsb.us-east-1.rds.amazonaws.com",
            "c7ogmojcci3nrmwp","usx7egblsam3bm7c","mr9tugmt9iix0e3z");

        }
    
        public function Open(){
            $query = "SELECT * FROM Pessoa";

            $res = $this-> link -> query($query);

            $arr = array();
            $count = 0;

            while($linha = $res -> fetch_array()){
                $arr[$count] = $linha['nome'] 
                ."peitos". $linha['dataNascimento'] ."peitos" .$linha['cidade'] . 
                "peitos" . $linha['idPessoa'];
                $count++;
            }
            echo json_encode($arr);


        }

        public function Load_Images($id){
            $res = $this -> link -> query("SELECT caminhoImagem FROM Imagens where idPessoa like " . $id);
            $foto = $res -> fetch_row();

            echo $foto[0];

        }
    }
?>