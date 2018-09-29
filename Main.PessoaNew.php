<?php
require_once "PessoaNew.php";
require_once "FormulasDoIMC.php";

$pessoa1 = new Pessoa("feminino", 1.60, 64);
$formula = new FormulasDoIMC();

echo " seu IMC é: " . $formula->calcularIMCDeUmaPessoa($pessoa1);

 ?>
