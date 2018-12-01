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
	}

	$oi = new Connect();
	$oi -> openMe();
?>
