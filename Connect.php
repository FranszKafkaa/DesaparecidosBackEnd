 <?php
    class Connection{
        private $link;
        
        function __construct(){
            $this -> link = new mysqli
            ("h2cwrn74535xdazj.cbetxkdyhwsb.us-east-1.rds.amazonaws.com",
            "c7ogmojcci3nrmwp","usx7egblsam3bm7c","mr9tugmt9iix0e3z");

        }
    
        public function Open(){
            $query = "SELECT nome, dataDesaparecimento, Cidade,Pessoa.idPessoa, caminhoImagem 
            FROM Pessoa,Imagens WHERE Pessoa.idPessoa = Imagens.idPessoa";
            $res = $this -> link -> query($query);

            $arr = array();
            $count = 0;

            while($linha = $res -> fetch_array()){
                $arr[$count] = $linha['nome'] 
                ."peitos". $linha['dataDesaparecimento'] ."peitos" .$linha['Cidade']. 
                "peitos" .$linha['idPessoa']."peitos". $linha['caminhoImagem'];

                $count++;
            }
            echo json_encode($arr);
        }

        public function GettingInfo($idUser){
            $res = $this -> link -> query("SELECT * FROM Pessoa WHERE 
            Pessoa.idPessoa LIKE " .$idUser);
            $count = 0;
            $Arr = array();

            foreach($res -> fetch_array() as $key => $value){

                if($count %2 == 1){
                    echo $key ." => ". $value . "<br>";
                    $Arr[$key] = $value;
                }
                $count++;
                echo json_encode($Arr);
            }
        }

    }
?>