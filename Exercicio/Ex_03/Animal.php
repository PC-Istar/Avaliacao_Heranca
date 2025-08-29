<?php
class Animal {
    public $nome;
    public $especie;

    public function __construct($nome, $especie){
        $this->nome = $nome;
        $this->idade = $especie;
    }

    public function apresentar() {
        echo "Nome: {$this->nome}, Especie: {$this->especie} <br>";
    }
}
?>