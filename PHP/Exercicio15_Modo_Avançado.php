<?php
//cria uma array multidimencional chamado $usuario com subarrays que contêm 
// informações de usuario
$usuario = [
    [   "id" => 1,
        "nome" => "Joao",
        "cidade" =>"cerquilho",
        "estado" => "SP"],
    [  "id" =>2 ,
        "nome" => "Daniel",
        "cidade" =>"caloré",
        "estado" => "Párana"],  
    [  "id" => 3,
        "nome" => "Pedro",
        "cidade" =>"Tatui",
        "estado" => "SP"],
    [  "id" => 4,
        "nome" => "Gabriel",
        "cidade" =>"Sorocaba",
        "estado" => "SP"],
    [  "id" => 5,
        "nome" => "Pablo",
        "cidade" =>"Cerquilho",
        "estado" => "SP"]
];

//Define avariavel $busca com o valor que deseja procurar no array.
$busca = "Pablo";

//Exibe a estrutura do array $usuario de forma legivel.
echo '<pre>';
print_r($usuario);
echo '</pre>';

//procura o valor armazenado na variavel $busca no array multidimencional 
// $usuario, especificamente no campo nome.
$indice = array_search($busca, array_column($usuario, 'nome'));

//Verifica se $indice não é igual a false, o que significaque o valor em 
//$busca foi encontrado no array.
if($indice !== false){
    //Se o valor em $busca foi encontrado, exibe o id do usuario 
    // correspondente
    echo "$busca foi encontrada com a cidade: ". $usuario[$indice]['cidade'];
}else{
    //Se o valor em $busca não foi encontrado, exibe uma mensagem indicando isso
    echo"$busca não foi encontrada na lista de usuarios1";
}
?>