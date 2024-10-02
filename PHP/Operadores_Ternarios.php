<?php

/*1- Faz o mesmo do de baixo mas troca as vaiaveis colocando maior e menor de 
idade.*/
/*$idade = 20;
$resultado = ($idade >= 18) ? "Maior de idade" : "Menor de idade";
echo $resultado. "<br>"; // Saída: Maior de idade*/

/* 2- Exibe variavel $nome que recebe o valor José e depois diz que o nome se 
for igual a josé mensagem passa a ser josé e depois exibe ola jose se nao for 
ola visitante*/
/*$nome = "José";
$mensagem = ($nome == "José") ? "Olá, José" : "Olá, visitante!";
echo $mensagem;*/

/*Operadores ternarios com booleano variavel true se variavel for true mensagem passa a exibir bem vindo se não faça login */
$is_logged_in = true;
$mensagem = $is_logged_in ? 'Bem-vindo de volta' : 'Por favor, faça login.';
echo $mensagem;
?>

