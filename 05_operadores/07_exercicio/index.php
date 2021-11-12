<?php

	echo 'Operadores Lógicos PHP <br>';

	function somar($a , $b) {

		$c = $a + $b;
		echo 'Soma: ' . $c . '<br>';

	}

	function subtrair($a , $b) {

		$c = $a - $b;
		echo 'Subtrair: ' . $c . '<br>';

	}

	function multiplicar($a , $b) {

		$c = $a * $b;
		echo 'Multiplicar: '. $c . '<br>';

	}

	function dividir($a , $b) {

		$c = $a / $b;
		echo 'Dividir: ' . $c . '<br>';

	}

	function modulo($a , $b) {

		$c = $a % $b;
		echo 'Modulo: ' . $c . '<br>';

	}

	function exponencial($a , $b) {

		$c = $a ** $b;
		echo 'exponencial: ' . $c . '<br>';

	}	


	somar(2 , 2);
	subtrair(2, 2);
	multiplicar(2, 2);
	dividir(2, 2);
	modulo(2, 2);
	exponencial(2, 2);

?>