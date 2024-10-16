<?php
// cria uma lista do post das informações da outra pagina
echo "<pre>";
print_r($_POST);
echo "</pre>";
echo "<hr>";

// determina uma variavel para cada categoria do pre
$variavel_titulo = $_POST["titulo"];
$variavel_categoria= $_POST["categoria"];
$variavel_descricao = $_POST["descricao"];

// junta todas as variaveis
$texto = $variavel_titulo. '#' .$variavel_categoria. '#' .$variavel_descricao;

echo $texto;

// usa o fopen para mostrar as palavras da variavel e modificar e fechar
$arquivo = fopen('registro.txt', 'a');

fwrite($arquivo, $texto);

fclose($arquivo);
?>