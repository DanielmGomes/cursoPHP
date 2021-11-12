<?php

	$a = 'daniel';

	echo "$a global 1 <br>";

	if (true) {
		
		$a = 'gomes';
		
		echo "$a if <br>";

	}

	echo "$a global 2 <br>";

	function testandoGlobal() {

		global $a; // função que acessa variavel global dentro de local

		$a = 'moreira';

		echo "$a local <br>"; 

	}

	testandoGlobal();
	echo "$a global 3 <br>";

?>