<?php
// Cria uma variavel de numeros
$numeros = [1,2,3,4,5,6,7,8,9,10];
// Mostra a primeira lista em lista e maostra quais numeros vão ser alterados
echo '<pre>';
print_r($numeros);
echo '<br>';
echo 'Os numeros tirados de sorteio foi: <br>', $numeros[0], '<br>', $numeros[4], '<br>', $numeros[9] ,'<br>';
echo '</pre>';
// Mostra a listas com os novos numeros e diz quais numeros foram incrementados
echo '<pre>';
$numeros[0] = 100;
$numeros[4] = 500;
$numeros[9] = 1000;
echo '<br>';
var_dump ($numeros);
echo '</pre>';
echo 'Os numeros passados foram alterados por: <br>', $numeros[0], '<br>', $numeros[4], '<br>', $numeros[9] ,'<br>';
?>