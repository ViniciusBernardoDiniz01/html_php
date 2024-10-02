<?php
// chama variavel numero
$numero = 1;
// usa do while para mostrar todos numeros pares de um a oitenta usando if e else e while
while ($numero <= 80){
    if ($numero % 2 == 0){
        echo"este numero e par: $numero <br>";
        $numero++;
}else{
    $numero++;
}


}
?>