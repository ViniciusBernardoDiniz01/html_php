<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
echo "Bem-vindo ao nosso site, <br>";
echo "<pre>";
print_r($_POST);
echo "</pre>";
echo "<br>";

echo "E_mail: ";
echo $_POST['email'];
echo '<br>';
echo "Senha: ";
echo $_POST['senha'];
?> 
</body>
</html>