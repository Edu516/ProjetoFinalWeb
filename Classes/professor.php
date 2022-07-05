<?php

class professor extends pessoa{
    private $codigo;
    /** @var especialidade $especialidade */
    private $especialidade;
    
    public function getCodigo() {
        return $this->codigo;
    }

    public function setCodigo($codigo): void {
        $this->codigo = $codigo;
    }

    public function getEspecialidade() {
        return $this->especialidade;
    }

    public function setEspecialidade(especialidade $especialidade): void {
        $this->especialidade = $especialidade;
    }



}
