<?php
include('header.php');
#classe Pessoa
class Pessoa{
    #atributos Pessoa
    public $nome;
    public $idade;
    #metodos pessoa

}

#objetos Pessoa
$pessoa1 = new Pessoa();
#atributos do objeto
$pessoa1->nome = "Janderson";
$pessoa1->idade = 35;

$pessoa2 = new Pessoa();
$pessoa2->nome = "Maria";
$pessoa2->idade = 30;

#exibir pessoa
echo $pessoa1->nome;
echo"</br>";
echo $pessoa1->idade;
include ('footer.php');