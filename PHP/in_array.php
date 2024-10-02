<?php
// Usa o array para criar uma variavel em lista
$lista_frutas = ["Banana","Maçã","Morango","Uva","Manga"];
$fruta = 'Banana';
/*Printa o valor da lista que foi chamado pelo numero dentro dos colchetes */

echo '<pre>';
print_r($lista_frutas);
echo '<br>';
echo '</pre>';

// Usa do if junto do in_array para ver se na lista há banana e esta chamando. 
// uma array simples ou unidimencinal.
if(in_array("$fruta", $lista_frutas)){
    echo "Temos $fruta na lista.";
}else{
    echo"Não tem $fruta na lista.";
}

?>