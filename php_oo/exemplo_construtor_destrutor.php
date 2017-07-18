<?php

	class Pessoa {

		private $nome;

		function correr(){
			echo $this->nome . " correndo<br />"
		}

		function __construct($nome){
			echo "Construtor Iniciado<br />";
			$this->nome = $nome;
			echo $this->nome;
		}

		function __destruct(){
			echo "objeto removido<br />";
		}
	
	}

$pessoa = new Pessoa('Alex');
$pessoa->correr();