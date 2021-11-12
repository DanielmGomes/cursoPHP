<?php

	function incrementar($a) {

		while ($a < 10 ) {
			
			$a++;
			echo $a . '<br>';

		}

	}

	function decrementar($a) {

		while ($a > 0) {
			
			$a--;
			echo $a . '<br>';

		}

	}
	

	echo 'Auto incremento <br>';
	incrementar(0);

	echo '<br> < --- *** --- > <br>';

	echo '<br> Auto deecremento <br>';
	decrementar(11);

?>