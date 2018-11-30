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
			$Pessoas = $this -> link -> query("SELECT * From Pessoa");
			$Arr = array();
			$count = 0;

			while($content = $Pessoas -> fetch_array()){
				$foto = $this -> link ->
				query("SELECT caminhoImagem From Imagens Where idPessoa LIKE ".
				$content['idPessoa']);
				$agoravai = $foto -> fetch_row();

				//teste de alguma coisa doida
				$Arr[$count] = $content['nome'] ." ".$content['dataDesaparecimento']
				." ".$agoravai[0];

				$count++;
			}
			echo json_encode($Arr) . "\n";
		}
	}

	$oi = new Connect();
	$oi -> openMe();
?>
