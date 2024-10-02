<?php

// dentro do da funcao uso o for para exibir os valores de 1 a 10 da tabuada

function multiplicacao($tabuada){
    for ($i = 0; $i <= 10; $i++){
        $resultado = $tabuada * $i;
        echo " $tabuada x $i = $resultado<br>";
    }
}

$tabuada =3;
multiplicacao($tabuada);
?>