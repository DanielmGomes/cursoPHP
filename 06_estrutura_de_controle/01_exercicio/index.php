<?php

	$a = 2;

	echo 'exercio estruturas de controle: 01 <br>';

	if (is_numeric($a)) {
			
		$a *= 2;

		if ($a > 100) {
			echo 'true ' . $a . '<br>';
		} else {
			echo 'false ' . $a . '<br>';
		}

	}

?>