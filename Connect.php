 <?php
    class Connection{
        private $link;
        
        function __construct(){
            $this -> link = new mysqli
            ("h2cwrn74535xdazj.cbetxkdyhwsb.us-east-1.rds.amazonaws.com",
            "c7ogmojcci3nrmwp","usx7egblsam3bm7c","mr9tugmt9iix0e3z");

        }
    
        public function Open(){
            $query = "SELECT nome, dataDesaparecimento, Cidade, caminhoImagem 
            FROM Pessoa,Imagens WHERE Pessoa.idPessoa = Imagens.idPessoa;";


            if(!$this -> link -> query($query)){
                echo $this -> link -> error;
            }else{
                echo "AAAAAAAA";
            }

            $arr = array();
            $count = 0;

            while($linha = $res -> fetch_array()){
                $arr[$count] = $linha['nome'] 
                ."peitos". $linha['dataNascimento'] ."peitos" .$linha['Cidade'] . 
                "peitos" . $linha['idPessoa'];
                $count++;
            }
            echo json_encode($arr);


        }
    }
?>