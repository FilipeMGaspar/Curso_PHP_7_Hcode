<?php
	
	
	$pessoa = array(
		'nome' => 'João',
		'idade' => 20
	);

	//&$value passagem por referencia
	foreach ($pessoa as $value) {
		if(gettype($value) === 'integer'){
			$value += 10;
		}
		echo $value ."<br>";
	}

	print_r($pessoa);
?>