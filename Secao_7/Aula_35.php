<?php
  function soma(int ...$valores){
  	return array_sum($valores);
  }

	function subtrair(float ...$valores):float{
  		return array_sum($valores);
	}

  echo soma(2, 2);
  echo "<br>";
  echo soma(2, 3);
  echo "<br>";
  echo soma(1.5, 2.3);
  echo "<br>";

  var_dump(subtrair(2.5, 5.3));
  echo "<br>".subtrair(2.5, 5.3);
?>