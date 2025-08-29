<?php
require_once 'Cachorro.php';

$Cachorro = new Cachorro("Puga", "Cachorro", "Pug");
$Cachorro->latir();

require_once 'Gato.php';

$Gato = new Gato("Carlinhos", "Doméstico", "Maine Coon" );
$Gato ->miar();
?>