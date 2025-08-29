<?php
require_once 'Caminhao.php';

$caminhao = new Caminhao(2020, "Volvo", 15000);
$caminhao->apresentar();

require_once 'Carro.php';

$carro = new Carro(2022, "Toytota", "Corola");
$carro->apresentar();
?>