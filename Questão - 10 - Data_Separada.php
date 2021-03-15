<?php

$data = "10/09/1977";
/*$data = date("d/m/Y")*/

$partes = explode("/",$data);

$dia = $partes[0];
$mes = $partes[1];
$ano = $partes[2];

echo "Data: ".$data;
echo "</br>";
echo "Dia: ".$dia;
echo "</br>";
echo "Mês: ".$mes;
echo "</br>";
echo "Ano: ".$ano;

?>