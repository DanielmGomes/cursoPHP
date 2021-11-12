<?php

	echo "testeando texto de aspas duplas <br>";
	echo 'testeando texto de aspas simples <br>';
	echo "testando 'aspas simples' dentro de dupla <br>";
	echo 'testando "aspas duplas" dentro de simples <br>';

	$name = "Daniel";
	$year = 26;

	echo "meu nome é: $name, e tenho $year anos."; // aspas duplas interppretam variaveis aspas simples não

?>