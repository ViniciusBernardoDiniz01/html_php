<?php
$numero = 1;
// Chama uma variavel $numero e usa do DO while, if e else para printar os numeros impares do 1 ao 80
do{
    if ($numero % 2 == 1){
        echo"Este numero é impar: $numero <br>";
        $numero++;
    }else{
        $numero++;
    }
}while ($numero <= 80);
?>