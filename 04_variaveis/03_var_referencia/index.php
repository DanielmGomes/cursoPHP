<?php

	$a = 10;
	$b =& $a;

	echo "$a <br>";
	echo "$b <br>";

	$a = 20;

	echo 'alteração referencia <br>';
	echo "$a <br>";
	echo "$b <br>";

	$b = 30;

	echo 'alteração referenciada <br>';
	echo "$a <br>";
	echo "$b <br>";

?>