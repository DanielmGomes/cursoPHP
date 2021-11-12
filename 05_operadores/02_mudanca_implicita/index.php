<?php

	$a = 2;
	$b = 3;

	echo 'Mudança implicita <br>';
	echo 'Resultado: ', $a / $b, '<br>';

	if (is_float($a / $b)) {
		
		echo 'variaveis integer, resultado float <br>';

	}

	if (is_string($a . $b)) {
		
		echo 'variaveis integer, resultado string <br>';

	}


	$nome = 'Daniel';
	$sobrenome = 'Gomes';

	$nomeCompleto = $nome . ' ' . $sobrenome;

	echo 'Olá, ', $nomeCompleto, '<br>';

?>