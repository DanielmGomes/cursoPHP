<?php

	$a = 10;

	echo "global: $a <br>";

	function teste() {

		$a = 5;

		echo "local: $a <br>";

	}

	teste();

	echo "global: $a <br>";
	teste();

	function testando() {

		$a = 15;

		echo "local: $a <br>";

	}

	$a = 20;

	echo "global: $a <br>";
	teste();
	testando();

?>