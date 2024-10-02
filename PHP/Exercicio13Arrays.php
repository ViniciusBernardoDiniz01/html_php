<?php
//cria uma variavel array chamada cadastro
$cadastro =  [];

/*Insere os valores nas arrays e cria a array nome e email */
$cadastro  ['nome'] = ['Emanuel','Pedro','Ana','Joaquim','João'];
$cadastro  ['email'] = ['Emanu@gmail.com','Pe@hotmail.com','ana@yahoo.com','joaca@gmail.com','João@mail.com'];

// Exibe todo conteudo array
echo'<pre>';
print_r($cadastro);
echo '<br>';
echo'</pre>';

// exibe o 3 indice do array nome e o 4 indice do email
echo'<pre>';
echo $cadastro['nome']['2'];
echo '<br>';
echo $cadastro['email']['0'];
echo'</pre>';

// altera as subarrays no indice 2 do nome e o indice 0 do email
echo'<pre>';
$cadastro['nome']['1'] = 'senai';
$cadastro['email']['0'] = 'aluno@senai.br';
print_r($cadastro);
echo $cadastro['nome']['1'];
echo '<br>';
echo $cadastro['email']['0'];
echo'</pre>';

?>