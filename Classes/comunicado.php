<?php
class comunicado{
    private $codigo;
    private $descricao;
    private $turmaCod;
    private $professorCod;
    
    public function getCodigo() {
        return $this->codigo;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function getTurmaCod() {
        return $this->turmaCod;
    }

    public function getProfessorCod() {
        return $this->professorCod;
    }

    public function setCodigo($codigo): void {
        $this->codigo = $codigo;
    }

    public function setDescricao($descricao): void {
        $this->descricao = $descricao;
    }

    public function setTurmaCod($turmaCod): void {
        $this->turmaCod = $turmaCod;
    }

    public function setProfessorCod($professorCod): void {
        $this->professorCod = $professorCod;
    }



}
