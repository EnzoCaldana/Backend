<?php 
session_start();

$usuario_autenticado = false;

$usuario_cadastrado = [
    ['email' => 'admin@senai.br',
    'senha' => 12345
    ],
    ['email' => 'suporte@senai.br',
    'senha' => 'a1b2c3'
    ],
    ['email' => 'aluno@senai.br',
    'senha' => 'abcde'
    ]
];

foreach ($usuario_cadastrado as $user){
    if ($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
        $usuario_autenticado = true;
    }
}

if ($usuario_autenticado){
    $_SESSION['autenticado'] = 'SIM';
    echo "Usuário autenticado com sucesso";
    header ('Location: painel.php');
}else {
    $_SESSION['autenticado'] = 'NÃO';
    header ('Location: index.php?login=erro');
}
?>