<?php
  function soma(int ...$valores){
  	return array(&valores);
  }

  echo soma(2, 2);
  echo "<br>";
  echo soma(2, 3);
  echo "<br>";
  
?>