<?php
// phpinfo();
require_once __DIR__ . '/vendor/autoload.php';

use Senac\SistemaDeMencoes\Models\TipoUsuario;

echo "Autoload funcionando!<br>";

$tipo = new TipoUsuario("Admin");
echo "Objeto criado com sucesso: " . $tipo->getTipo();
echo 'Id do usuario' . $tipo->save();