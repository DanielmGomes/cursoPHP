<?php

	$a = [1, "dois", 3, "quarto", 5, "seis", 7, "oito", 9, "dez"];	
	$y = 0;

	echo 'exercício while: 01 <br>';

	while ($y < count($a)) {
		
		if (is_string($a[$y])) {
			echo $a[$y] . '<br>';
		}

		$y++;

	}


?>