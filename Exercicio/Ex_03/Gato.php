<?php
require_once 'Animal.php';

class Gato extends Animal {
    public $raça;

    public function __construct($nome, $especie, $raça) {
        parent::__construct($nome, $especie);
        $this->raça = $raça;
    }

public function miar() {
    echo "Nome: {$this->nome}, Especie: {$this->especie}, Raça: {$this->raça}<br>";
    }

}

?>