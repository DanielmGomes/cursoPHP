<?php

	$a = 1;
	$b = '1';

	echo 'operador não idêntico <br>';

	if ($a !== $b) {
		echo 'true <br>';
	}else {
		echo 'false <br>';
	}

	$a = 1;
	$b = 1;

	echo '<br> < --- *** --- > <br>';

	if ($a !== $b) {
		echo 'true <br>';
	}else {
		echo 'false <br>';
	}

	$a = 1;
	$b = '2';

	echo '<br> < --- *** --- > <br>';

	if ($a !== $b) {
		echo 'true <br>';
	}else {
		echo 'false <br>';
	}

	$a = 1;
	$b = 2;

	echo '<br> < --- *** --- > <br>';

	if ($a !== $b) {
		echo 'true <br>';
	}else {
		echo 'false <br>';
	}

?>