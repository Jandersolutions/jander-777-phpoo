<?php
include('header.php');
#classe Pessoa
class Pessoa{
    #atributos Pessoa
    public $nome;
    public $idade;
    #metodos pessoa
    public function correr($km){
    echo $this->nome." Esta correndo!";
	    for($i = 0;$km > $i; $i++) {
		    echo ".";
	    }
	    echo $this->nome." terminou de correr";
}
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
echo"</br>";
#exbir o metodo da classe no objeto pessoa1
echo $pessoa1->correr(50);
include ('footer.php');