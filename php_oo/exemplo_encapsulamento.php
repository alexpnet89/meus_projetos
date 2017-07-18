<?php

	class Veiculo {

		private $placa;
		private $cor;

		// Poderá ser herdado nas subclasses
		protected $tipo = "Caminhonete";

		public function setPlaca($placa){
			$this->placa = $placa;
		}

		public function getPlaca(){
			return $this->placa;
		}

	}

	class Carro extends Veiculo {
		public function exibirTipo(){
			echo $this->tipo;
		}
	}

	$veiculo = new Veiculo();
	$veiculo->setPlaca('ABC123');
	echo $veiculo->placa;

	$carro = New Carro();
	echo $carro->exibirTipo();
	
