<?php
// Determina uma variavel list vazia
$cadastro = [];

// Incrementa duas listas nessa variavel lista assim formando um array multidimencional
$cadastro['usuario'] = ['João','Maria','Pedro'];
$cadastro['senha'] = ['1234','abcd','5678'];

// Mostra a lista e avisa quais valores seram alterados
echo '<pre>';
print_r($cadastro);
echo 'Numeros a serem alterados: <br>';
echo $cadastro['usuario'] [1];
echo '<br>';
echo $cadastro['senha'] [1]; 
echo '</pre>';

// Altera os valores e avisa quais foram
echo'<pre>';
echo $cadastro ['usuario'] [1] = 'Ana';
echo $cadastro['senha'] [1] = 'efgh';
print_r($cadastro);
echo 'Os valores alterados foram para: <br>';
echo $cadastro ['usuario'] [1];
echo '<br>';
echo $cadastro ['senha'] [1];
echo'</pre>';
?>