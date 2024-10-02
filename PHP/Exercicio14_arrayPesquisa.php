<?php
//Denomina duas variaveis a select que é usada como nome do cliente e a 
// array como a lista
$nome = ["Maria","Joao","Pedro","Pablo","Gabriel","Vinicius","Felipe",
"Joaquina","Nathan","Valter"];

$select = "Pablo";

// Usa para achar o indice na Array nome
$indice = array_search("$select", $nome);

/*Printa o valor da lista que foi chamado pelo numero dentro dos colchetes */
echo '<pre>';
print_r($nome);
echo '<br>';
echo '</pre>';

//vai usar do if para mostrar o indice
if($indice !== false){
    echo "O(A) $select é o " .$indice. " do banco de dados.";

}else{
    echo "Nome não encontrado no banco de dados.";
}
echo"<br>";
// Array que mostra se a fruta esta na lista
if(in_array("$select", $nome)){
    echo "Temos $select no banco de dados.";
}else{
    echo"Não tem $select no banco de dados.";
}
?>