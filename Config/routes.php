<?php

return [
    'GET|/' => \Senac\SistemaDeMencoes\Controllers\LoginController::class,
    'GET|/cadastro' => \Senac\SistemaDeMencoes\Controllers\RegisterFormController::class,
    'POST|/cadastro' => \Senac\SistemaDeMencoes\Controllers\RegisterController::class,
    // 'GET|/edit-aluno' => \Senac\SistemaDeMencoes\Controller\FormEditaAlunoController::class,
    // 'POST|/edit-aluno' => \Senac\SistemaDeMencoes\Controller\EditaAlunoController::class,
    // 'GET|/del-aluno' => \Senac\SistemaDeMencoes\Controller\RemoveAlunoController::class,
    // 'GET|/login' => \Senac\SistemaDeMencoes\Controller\LoginFormController::class,
    // 'POST|/login' => \Senac\SistemaDeMencoes\Controller\LoginController::class,
];