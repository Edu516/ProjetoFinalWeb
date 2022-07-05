<?php
require_once 'pessoa.php';
class admin extends pessoa{
    private $codigo;
    
    public function getCodigo() {
        return $this->codigo;
    }

    public function setCodigo($codigo): void {
        $this->codigo = $codigo;
    }


}
