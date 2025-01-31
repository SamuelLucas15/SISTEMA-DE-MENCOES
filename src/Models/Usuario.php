<?php
namespace Senac\SistemaDeMencoes\Models;

use Senac\SistemaDeMencoes\Config\Database;

use Senac\SistemaDeMencoes\Models\TipoUsuario;

class Usuario {
    private $id_usuario;
    private $nome;
    private $email;
    private $cpf;
    private $matricula;
    private $senha;
    private $id_tipo_usuario;
    
    // Construtor
    public function __construct($nome, $email, $cpf, $matricula, $senha, $id_tipo_usuario, $id_usuario = null) {
        $this->id_usuario = $id_usuario;
        $this->nome = $nome;
        $this->email = $email;
        $this->cpf = $cpf;
        $this->matricula = $matricula;
        $this->senha = $senha;
        $this->id_tipo_usuario = $id_tipo_usuario;
    }

    // Métodos de acesso (getters e setters)
    public function getIdUsuario() {
        return $this->id_usuario;
    }

    public function setIdUsuario($id_usuario) {
        $this->id_usuario = $id_usuario;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getCpf() {
        return $this->cpf;
    }

    public function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    public function getMatricula() {
        return $this->matricula;
    }

    public function setMatricula($matricula) {
        $this->matricula = $matricula;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }

    // Método para obter o tipo de usuário
    public function getTipoUsuario() {
        return $this->id_tipo_usuario;
    }

    // Método para associar um tipo de usuário
    public function setTipoUsuario(TipoUsuario $id_tipo_usuario) {
        $this->id_tipo_usuario = $id_tipo_usuario;
    }
    // Método para salvar (inserir ou atualizar) no banco de dados
    
}
