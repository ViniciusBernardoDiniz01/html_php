<?php
// Usa o array para criar uma variavel em lista
$lista_frutas = ["Banana","Maçã","Morango","Uva","Manga"];
/*Printa o valor da lista que foi chamado pelo numero dentro dos colchetes EX: 
[3]chamaria UVA */

echo '<pre>';
print_r($lista_frutas);
echo  $lista_frutas[04];
echo '<br>';
echo '</pre>';

// Altera valor 0 --> banana para melancia
echo'<pre>';
$lista_frutas[0] = "Melancia";
print_r($lista_frutas);
echo'</pre>';

// printa o novo valor e pula linha
echo "<br>";

echo $lista_frutas[0];
?>