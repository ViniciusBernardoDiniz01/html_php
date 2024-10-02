<?php

// criando array list
$list = [];

// Inseri os valores dentro da array 
$list ['num'] = [1,2,3];
$list ['num_contrario'] = [3,2,1];

// Troca o indice 1 para uva em outra tabela modifica o indice 2 e 
// adiciona mais um numero na tabela
$list ['num'] [1] = 'Uva';
$list['num_contrario'] [2] = '100';
$list['num'] [3] = 'Valor extra';

// Printa as duas arrays em lista e mostra os numeros novos
echo '<pre>';
print_r($list);
echo $list ['num'][1];
echo"<br>";
echo $list ['num_contrario'][2];
echo"<br>";
echo$list ['num'][3];
echo '</pre>';
?>