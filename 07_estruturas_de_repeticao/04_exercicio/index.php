<?php

	$a = 4;

	echo 'exercício while: 01 <br>';

	while ($a <= 30) {
		
		echo $a . '<br>';
		$a += 2;

		if ($a  === 24) {
			echo $a . ' <br>';
			break;
		}


	}

?>