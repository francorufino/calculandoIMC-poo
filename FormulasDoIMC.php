<?php

class FormulasDoIMC{
  private $homem;
  private $mulher;
  private $resultado;


  public function calculaIMC($altura, $peso){
    $this->resultado=$peso / pow($altura,2);
  }

public function calcularIMCDeUmaPessoa($pessoa){
  $sexo = $pessoa->getSexo();
  $altura = $pessoa->getAltura();
  $peso = $pessoa->getPeso();
  return $this->calcularIMC($sexo, $altura, $peso);
}

  public function calcularIMC($sexo, $altura, $peso){
    $this->calculaIMC($altura,$peso);

    echo "sexo: " . $sexo;
    if($sexo == "masculino"){
      if($this->resultado<=20){
        echo "<br> resultado: Você está abaixo do peso <br>";
        return $this->resultado;
      }elseif($this->resultado >=20 && $this->resultado <=25){
        echo "<br> resultado: Você está no seu peso Ideal <br>";
        return $this->resultado;
      } else{
        echo "<br> resultado: Você está acima do Peso <br>";
        return $this->resultado;
      }
    }
    if($sexo=="feminino"){
      if($this->resultado<=19){
        echo "<br> resultado: Você está abaixo do peso <br>";
        return $this->resultado;
      }elseif($this->resultado >=19 && $this->resultado <=24){
        echo "<br> resultado: Você está no seu peso Ideal <br>";
        return $this->resultado;
      } else{
        echo "<br> resultado: Você está acima do Peso <br>";
        return $this->resultado;
      }

    }

  }

}

 ?>
