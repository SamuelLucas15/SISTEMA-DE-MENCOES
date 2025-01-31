<?php

namespace Senac\SistemaDeMencoes\Controllers;

use Senac\SistemaDeMencoes\Controllers\Controller;

class RegisterFormController implements Controller {

   public function processaRequisicao(): void
   {
        require_once __DIR__ . '/../../views/cadastro.php';
   }
}