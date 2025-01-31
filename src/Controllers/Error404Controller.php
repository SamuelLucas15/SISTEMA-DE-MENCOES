<?php

namespace Senac\SistemaDeMencoes\Controllers;

use Senac\SistemaDeMencoes\Controllers\Controller;

class Error404Controller implements Controller
{
    public function processaRequisicao(): void
    {
        http_response_code(404);
    }
}