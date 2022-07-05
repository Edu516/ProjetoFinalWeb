<?php

class pessoa{
    private $idPessoa;
    private $nome;
    private $sobrenome;
    private $login;
    private $senha;
    private $situacao;
    
    public function getIdPessoa() {
        return $this->idPessoa;
    }

    public function setIdPessoa($idPessoa): void {
        $this->idPessoa = $idPessoa;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getSobrenome() {
        return $this->sobrenome;
    }

    public function getLogin() {
        return $this->login;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function getSituacao() {
        return $this->situacao;
    }

    public function setNome($nome): void {
        $this->nome = $nome;
    }

    public function setSobrenome($sobrenome): void {
        $this->sobrenome = $sobrenome;
    }

    public function setLogin($login): void {
        $this->login = $login;
    }

    public function setSenha($senha): void {
        $this->senha = $senha;
    }

    public function setSituacao($situacao): void {
        $this->situacao = $situacao;
    }

    
}
