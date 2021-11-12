<?php

	$a = (int) "12";

	echo 'operador cast <br>';

	echo $a . '<br>';
	echo $a + 10 . '<br>';

	if (is_int($a)) {
		echo 'true <br>';
	} else {
		echo 'false <br>';
	}

?>