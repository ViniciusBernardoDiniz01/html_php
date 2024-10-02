<?php
/* Esse codigo usa swich como formulario se cor escolhida for vermelho mostra 
vermelho e acaba. Se não for ele vai pro proximo, se não for nenhuma colocada 
nas case ele usa defaut e exibe o ultimo texto*/
$corEscolhida = "Vermelho";

switch($corEscolhida){
    case "Vermelho":
        echo "Você escolheu a cor vermelha.";
        break;
    case "Azul":
        echo "Você ecolheu a cor azul.";
        break;
    case "Verde":
        echo "Você ecolheu a cor verde.";
        break;
    default:
        echo "Cor Indisponível.";
        break;
}
?>