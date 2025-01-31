<?php

namespace Senac\SistemaDeMencoes\Controllers;

use Senac\SistemaDeMencoes\Controllers\Controller;

class LoginController implements Controller
{


    public function processaRequisicao(): void
    {
        require_once __DIR__ . '/../../views/entrada.php';
    }
}