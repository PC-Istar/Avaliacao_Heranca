<?php
require_once 'Animal.php';

class Cachorro extends Animal {
    public $raça;

    public function __construct($nome, $especie, $raça) {
        parent::__construct($nome, $especie);
        $this->raça = $raça;
    }

public function latir() {
    echo "Nome: {$this->nome}, Especie: {$this->especie}, Raça: {$this->raça}<br>";
    }

}

?>