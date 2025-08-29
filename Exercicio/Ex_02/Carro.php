<?php
require_once 'Veiculo.php';

class Carro extends Veiculo {
    public $modelo;

    public function __construct($ano, $marca, $modelo) {
        parent::__construct($ano, $marca);
        $this->modelo = $modelo;
    }

    public function apresentar() {
        echo "Ano: {$this->ano}, Marca: {$this->marca}, Modelo: {$this->modelo} <br>";
    }
} 
?>