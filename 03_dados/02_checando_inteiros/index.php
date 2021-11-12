<?php
	
	$numero = 5;

	if (is_int($numero)) { // true

		echo "o número pertence ao conjunto dos inteiros <br>";
	}

	$texto = "não é um numero inteiro";

	if (is_int($texto)) { // false

		echo "o número pertnete ao conjunto dos inteiros <br>";

	} else {

		echo "não pertence ao conjunto dos inteiros <br>";

	}
 

?>