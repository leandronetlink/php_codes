<?php
/************** Escalares *****************/
// stringS
$nome = "Ola mundo";
var_dump($nome);
if (is_string($nome)) {
	echo "E uma string";
}else{
 	echo "nao e uma string";
}
//int
echo "<hr>";
$idade = 12;
var_dump($idade);
if (is_int($idade)) {
	echo "E um inteiro";
}else{
	echo "Nao um inteiro";
}
echo "<hr>";
//boolean

$admin = true;
var_dump($admin);
if (is_bool($admin)) {
	echo "eh um bool";
}else{
	echo "nao eh um bool";
}
echo "<hr>";

/********************* Compostos ***********************/
$carros = array("Gol", "Uno", "Camaro",12,20.6,true);
var_dump($carros);
if (is_array($carros)) {
	echo "Eh um array";
}else{
	echo "nao eh um array";
}
echo("<hr>");


// object

class Cliente {
	public $nome;
	public function atribuirNome($nome)
	{
		$this->nome = $nome;
	}
}
	$cliente = new Cliente();
	$cliente->atribuirNome("lEANDRO");
	var_dump($cliente);

	if (is_object($cliente)) {
		echo("Eh um objeto");
	}else{
		echo("nao eh um objeto");
	}
	echo "<hr>";
/************** NULL *******************/
$cidade = NULL;
var_dump($cidade);
