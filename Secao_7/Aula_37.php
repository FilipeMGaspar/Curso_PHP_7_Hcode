<?php
	function test($callback){
		//Processo lento
		int c = 0;
		do{
			c++;
		}while(c <= 100000);
		$callback();
	} 

	test(function(){
		echo "Terminou!";
	});

?>