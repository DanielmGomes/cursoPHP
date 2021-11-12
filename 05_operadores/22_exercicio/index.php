<?php

	$a = (int) 'testando';
	$b = (string) 12.9;
	$c = (float) true;
	$d = (bool) [1,2,3];

	echo 'exercicio cast int: 01 <br>';

	if (is_int($a)) {
		echo 'true <br>';
	} else {
		echo 'false <br>';
	}

	echo 'exercicio cast string: 02 <br>';

	if (is_string($b)) {
		echo 'true <br>';
	} else {
		echo 'false <br>';
	}

	echo 'exercicio cast float: 03 <br>';

	if (is_float($c)) {
		echo 'true <br>';
	} else {
		echo 'false <br>';
	}

	echo 'exercicio cast bool: 04 <br>';

	if (is_bool($d)) {
		echo 'true <br>';
	} else {
		echo 'false <br>';
	}

?>