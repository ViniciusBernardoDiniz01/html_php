<?php
//cria uma array multidimencional chamado $usuario com subarrays que contêm 
// informações de usuario
$usuario = [
    [   "id" => 1,
        "nome" => "Joao",
        "email" => "Joao@gmail.com"],
    [   "id" => 2,
        "nome" => "Maria",
        "email" => "Maria@gmail.com"],
    [   "id" => 3,
        "nome" => "Pedro",
        "email" => "Pedro@gmail.com"]
];

//Define avariavel $busca com o valor que deseja procurar no array.
$busca = "Pedro@gmail.com";

//Exibe a estrutura do array $usuario de forma legivel.
echo '<pre>';
print_r($usuario);
echo '</pre>';

//procura o valor armazenado na variavel $busca no array multidimencional 
// $usuario, especificamente no campo nome.
$indice = array_search($busca, array_column($usuario, 'email'));

//Verifica se $indice não é igual a false, o que significaque o valor em 
//$busca foi encontrado no array.
if($indice !== false){
    //Se o valor em $busca foi encontrado, exibe o id do usuario 
    // correspondente
    echo "$busca foi encontrada com o ID: ". $usuario[$indice]['id'];
}else{
    //Se o valor em $busca não foi encontrado, exibe uma mensagem indicando isso
    echo"$busca não foi encontrada na lista de usuarios";
}
?>