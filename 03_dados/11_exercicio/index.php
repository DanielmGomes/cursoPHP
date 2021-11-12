<?php

	$user = ['name' => 'Daniel', 'year' => 26, 'city' => 'Caxambu'];

	print_r($user);
	echo '<br>';

	echo "meu nome é: $user[name] <br>";
	echo "minha idade é: $user[year] <br>";

	if ($user['year'] > 18) {
		echo 'maior de idade <br>';
	}

?>