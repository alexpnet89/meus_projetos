<?php
	
	// classe mãe ou superclasse
	class Felino {

		var $mamifero = true;

		function correr(){
			echo 'correr como felino';
		}

	}

	// subclasse
	class Chita extends Felino {

		// Polimorfismo
		function correr(){
			echo 'correr como chita';
		}

	}
	
	
	class Gato extends Felino {
		
		// Polimorfismo
		function correr(){
			echo 'correr como um gato';
		}		

	}

	$chita = new Chita();
	echo $chita->mamifero . <br />;

	echo $chita->correr();

	$gato = new Gato();
	echo $gato->mamifero . <br />;

	echo $gato->correr();