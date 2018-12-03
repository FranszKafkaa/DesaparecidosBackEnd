<?php
	class Connect{
		private $link;
       		 function __construct(){
         		$this -> link = new mysqli
            		("h2cwrn74535xdazj.cbetxkdyhwsb.us-east-1.rds.amazonaws.com",
            		"c7ogmojcci3nrmwp","usx7egblsam3bm7c","mr9tugmt9iix0e3z");

                 if($this -> link -> connect_error){
                     echo "Nao foi " . $this -> link -> connect_error;
                 }
        	}
		public function openMe(){
			$Pessoas = $this -> link ->query("SELECT nome, dataDesaparecimento, Cidade,".
			"caminhoImagem FROM Pessoa,Imagens WHERE Pessoa.idPessoa = Imagens.idPessoa;");

			$Arr = array();
			$count = 0;

			while($content = $Pessoas -> fetch_array()){
				//teste de alguma coisa doida
				$Arr[$count] = $content['nome'] ." ".$content['dataDesaparecimento']." ".
				$content['Cidade']." ".$content['caminhoImagem'];

				$count++;
			}
			echo json_encode($Arr) . "\n";
		}
		public function SaveMySoul($id){
			$count = 0;
			$arr = array();

			$res = $this -> link -> query("SELECT * FROM Pessoa WHERE idPessoa like {$id}");


			foreach($res -> fetch_array() as $key => $value){

				//ignora registos onde a key eh um inteiro
				if ($count %2 == 1){
					$arr[$key] = $value;
					echo $key ." => ". $value . "\n";
				}
				$count++;
			}

			unset($count);
			echo json_encode($arr) ."\n" ;
		}
	}

	$oi = new Connect();
	$oi -> SaveMySoul(4);
?>
