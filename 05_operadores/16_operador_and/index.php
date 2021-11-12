<?php

	$a = 10;
	$b = 20;
	$c = 30;

	echo 'operador lógico AND <br>';

	if ($a < $b && $b < $c) {
		echo 'true <br>';
	} else {
		echo 'false <br>';
	}

	$a = 10;
	$b = 50;
	$c = 30;

	echo '<br> < --- *** --- > <br>';

	if ($a < $b && $b > $c) {
		echo 'true <br>';
	} else {
		echo 'false <br>';
	}


?>