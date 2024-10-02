<?php
/*Usa do for para repetição para colocar os numeros de 1 a 10 descobrir se ele é par 
e se ele é baixo medio e alto logo apos printa tudo em uma linha que se repete 10 vezes*/
for($i = 1; $i <= 10; $i++){
    $conta = ($i % 2 == 0 ) ? "Par" : "Impar"; 
    switch(true){
        case($i <= 3):
            $categoria = "baixo.";
            break;
        case ($i > 3 && $i <= 7):
            $categoria = "medio.";
            break;
        case ($i > 7 && $i <= 10):
            $categoria = "alto.";
            break;
    }
    echo "O numero $i é $conta e esta na classe $categoria <br>";
}

?>
