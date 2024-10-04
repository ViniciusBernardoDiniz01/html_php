<?php 
session_start();

// fala que o usuario é falso determinando uma variavel
$usuario_autenticado = false;

// define uma array com o email e a senha do usuario
$usuario_cadastrado = [
    ['email' => 'admin@senai.br',
     'senha' => 12345,
    ],
    ['email' => 'aluno@senai.br',
    'senha' => 'abcde',
    ],
    ['email' => 'suporte@senai.br',
    'senha' => '1a2b3c'
    ]
];

// usa do foreach para ver se a senha e o email estão corretos
foreach($usuario_cadastrado as $user){
    if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
        $usuario_autenticado = true;
    }
}

// usa do if para mostrar usuario indentificado caso as informações estiver correta e se não estiver volta a pagina inicial
if($usuario_autenticado == true){
    $_SESSION['autenticado'] = 'SIM';
    echo 'Usuario autenticado com sucesso!, Bem vindo';
    header('Location: painel.php');
}else{
    // echo 'Usuario ou senha incorretos';
    $_SESSION['autenticado'] = 'NÂO';
    header('Location: index.php?login=erro');
}
?> 
