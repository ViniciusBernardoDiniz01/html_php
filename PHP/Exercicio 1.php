<?php
// recebe as variaveis
$nota = 10;
$nota2 = 6.5;
$nota3 = 8.6;
// recebe apartir de um calculo de media o valor da media
$media = ($nota + $nota2 + $nota3) / 3;

// Usa do if e else para descobrir se o aluno passou ou não e tambem exibe
if ($media >= 7){
    echo 'O aluno passou <br/>';
}else{
    echo 'Reprovado <br/>';
}
// exibe as notas declaradas mais acima
echo "A primeira nota é: " . $nota .'<br/>';
echo "A segunda nota é: " . $nota2 .'<br/>';
echo "A terceira nota é: " . $nota3 .'<br/>';
?>