<?php

class turma{
    private $codigo;
    private $nometurma;
    /** @var professor $professor */
    private $professor;
    /** @var aluno $aluno */
    private $aluno = [];
    
    public function getCodigo() {
        return $this->codigo;
    }

    public function getNometurma() {
        return $this->nometurma;
    }

    public function getProfessor() {
        return $this->professor;
    }

    public function getAluno() {
        return $this->aluno;
    }

    public function setCodigo($codigo): void {
        $this->codigo = $codigo;
    }

    public function setNometurma($nometurma): void {
        $this->nometurma = $nometurma;
    }

    public function setProfessor(professor $professor): void {
        $this->professor = $professor;
    }

    public function setAluno(aluno $aluno): void {
        $this->aluno = $aluno;
    }


}

