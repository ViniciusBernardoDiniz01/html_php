<?php
// Recebe as variaveis
$valor_compra = 500;
$cliente_vip = 'não';
/*Usa do if e else para descobrir se o cliente tera direito
a um desconto e printa uma mensagem dizendo se sim ou se nao*/

if ($valor_compra > 500 or $cliente_vip == "sim" ){
    echo("Cliente recebe um desconto");
}else{
    echo("Cliente não recebe um desconto");
}

?>