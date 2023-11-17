<?php

class Fruta {
  var $nome;
  var $sobrenome;

  public function __construct(){ }
  public function setName($nome) {
    $this->nome = $nome;
  }
  public function getName(){
    return $this->nome;
  }
  public function setSobrenome($sobrenome){
    $this->sobrenome = $sobrenome;
  }
  public function getSobrenome(){
    return $this->sobrenome;
  }
}

$pessoa = new Fruta();

$pessoa->setName("Gusttavo");
echo $pessoa->getName();

echo ' ';

$pessoa->setSobrenome("Ruy");
echo $pessoa->getSobrenome();

