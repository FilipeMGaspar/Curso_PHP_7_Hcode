<?php
	function test($callback){
		//Processo lento
		$c = 0;
		
		do{
			$c++;
		}while($c <= 100000000);

		$callback();
	} 

	test(function(){
		echo "Terminou!";
	});

?>