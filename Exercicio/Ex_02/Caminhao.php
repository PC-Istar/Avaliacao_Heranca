<?php
require_once 'Veiculo.php';

class Caminhao extends Veiculo {
     public $carga;



    public function __construct($ano, $marca, $carga) {
        parent::__construct($ano, $marca);
        $this->carga = $carga;
    }

    public function apresentar() {
        echo "Ano: {$this->ano}, Marca: {$this->marca}, Carga: {$this->carga} <br>";
    }
}
?>