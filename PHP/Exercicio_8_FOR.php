<?php
// Denomina a variavel contador
$contador = 0;
/*usa do for para somar todos os numeros de 1 a 100 usando a variavel 
para acumular este valor*/
for ($i = 1; $i <= 100; $i++){
    $contador = ($contador + $i);
    
}
echo "O total é: $contador<br>";
?>