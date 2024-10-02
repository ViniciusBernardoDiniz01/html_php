<?php
// Usa o array para criar uma variavel em lista e denomina uma variavel para 
// facilitar na in_array
$lista_frutas = ["Banana","Maçã","Morango","Uva","Manga"];
$fruta = 'Banana';

// Fala que o indice é um array search e que ele deve mostrar o 
// indice da variavel fruta
$indice = array_search("$fruta", $lista_frutas);

/*Printa o valor da lista que foi chamado pelo numero dentro dos colchetes */
echo '<pre>';
print_r($lista_frutas);
echo '<br>';
echo '</pre>';

// Mostra onde esta localizada a fruta usando o array_search
if($indice !== false){
    echo "A $fruta é o " .$indice. " do cardapio.";
}else{
    echo "Esta fruta não foi encontrada no cardapio.";
}
echo"<br>";
// Array que mostra se a fruta esta na lista
if(in_array("$fruta", $lista_frutas)){
    echo "Temos $fruta na lista.";
}else{
    echo"Não tem $fruta na lista.";
}
?>