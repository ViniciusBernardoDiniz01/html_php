<?php
// Denomina a variavel
$contador = 0;
/*usa do for para pegar o numero do 1 ao 50 apos isso tira a raiz 
quadarda com contador e sqrt e arredonda com round*/
for($i = 1; $i <= 50; $i++){
    $contador = sqrt($i);
    $arredondado =round($contador, 2);
    echo"A raiz quadrada de √$i é: $arredondado <br>";
}
?>