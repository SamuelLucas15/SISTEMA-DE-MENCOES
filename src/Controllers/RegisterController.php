<?php

namespace Senac\SistemaDeMencoes\Controllers;

use Senac\SistemaDeMencoes\Models\Usuario;
use Senac\SistemaDeMencoes\Repositories\RepositoryUser;

class RegisterController implements Controller
{
    public function __construct(private RepositoryUser $user)
    {

    }

    public function processaRequisicao(): void
{
    // Capturando e filtrando os dados do formulário
    $nome = filter_input(INPUT_POST, 'username'); // Nome do aluno
    if ($nome === false || empty($nome)) {
        header('Location: /cadastro?error_name');
        exit();
    }

    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL); // E-mail
    if ($email === false || empty($email)) {
        header('Location: /cadastro?error_email');
        exit();
    }

    $cpf = filter_input(INPUT_POST, 'cpf'); // CPF
    if ($cpf === false || empty($cpf)) {
        header('Location: /cadastro?error_cpf');
        exit();
    }

    $matricula = filter_input(INPUT_POST, 'matricula'); // Matrícula
    if ($matricula === false || empty($matricula)) {
        header('Location: /cadastro?error_matricula');
        exit();
    }
    
    $id_tipo_usuario = filter_input(INPUT_POST, 'tipo_usuario', FILTER_VALIDATE_INT);
    if ($id_tipo_usuario === false || !in_array($id_tipo_usuario, [1, 2, 3])) { // Valida se o tipo é 1, 2 ou 3
        header('Location: /cadastro?error_tipo');
        exit();
    }

    // Se o tipo de usuário for 3 (se for aluno), garantir que a matrícula seja numérica
    if ($id_tipo_usuario === 3 && !ctype_digit($matricula)) {
        header('Location: /cadastro?error_matricula_numerica');
        exit();
    }


    $senha = $cpf;

    // Salvando os dados usando a classe Usuario
    $requisicao = $this->user->save(
        new Usuario(
            $nome, $email, $cpf, $matricula, $senha, $id_tipo_usuario, $id_usuario = null
        )
    );

    // Verificando se a requisição foi bem-sucedida
    if ($requisicao === false) {
        header('Location: /cadastro?sucesso=0');
    } else {
        header('Location: /cadastro?sucesso=1');
    }
}

}