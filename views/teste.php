<?php

require_once __DIR__ . '../../vendor/autoload.php'; // Caminho relativo baseado no diretório atual

use Senac\SistemaDeMencoes\Models\TipoUsuario;

use Senac\SistemaDeMencoes\Models\Usuario;

$tipoUsuario = TipoUsuario::findById(1); // Busca o tipo de usuário com ID = 1

// Se o tipo de usuário foi encontrado, criar um novo usuário
if ($tipoUsuario) {
    $usuario = new Usuario(
        "Nome do Usuário",         // Nome
        "email@dominio.com",       // Email
        "12345678901",             // CPF
        "123456",                  // Matrícula
        "senha",                   // Senha
        $tipoUsuario->getId()              // Tipo de usuário
    );

    // Salvar o usuário no banco de dados
    $usuario->save();
    echo "Usuário salvo com sucesso!";
} else {
    echo "Tipo de usuário não encontrado.";
}
