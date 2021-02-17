<?php
$nome = "Hcode";

$nome2 = 'Treinamentos';

var_dump($nome, $nome2);

echo "<br><br>ABC $nome";

echo '<br><br>$nome2';


$texto = "joao rangel";
echo "<br>".$texto." ";
echo strtoupper($texto);

$nome = "UDEMY";
echo "<br>".$nome." ";
echo strtolower($nome);

$nome2 = "manuel marques";
echo "<br>" . $nome2 . " ";
echo " ". ucfirst($nome2). " ";
echo ucwords($nome2);

$empresa = "Hcode";

$empresa = str_replace("o", "0", $empresa);
echo "<br>". $empresa;
$empresa = str_replace("e", "3", $empresa);
echo "<br>" . $empresa;


$frase = "A repetição é a mãe da retenção.";
$q = strpos($frase, "mãe");
echo "<br><br>";
var_dump($q);

$texto = substr($frase, 0, $q);
echo "<br>" . $texto;

?>