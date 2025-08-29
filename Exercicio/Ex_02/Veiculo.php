<?php
class Veiculo {
    public $marca;
    public $ano;

    public function __construct($ano, $marca){
        $this->ano = $ano;
        $this->marca = $marca;
    }

    public function apresentar () {
        echo "Ano: {$this->ano}, Marca: {$this->marca} <br>";
    }
}


?>