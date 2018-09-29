<?php

class Pessoa{
private $sexo;
private $altura;
private $peso;


public function __construct($sexo, $altura, $peso){
  $this->altura = $altura;
  $this->peso = $peso;
  $this->sexo = $sexo;
}


public function getSexo(){
  return $this->sexo;
}
public function getAltura(){
  return $this->altura;
}

public function getPeso(){
  return $this->peso;
}

}

 ?>
