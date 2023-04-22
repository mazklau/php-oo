<?php
require_once 'Pessoa.php';

$pessoa1 = new Pessoa();  
$pessoa2 = new Pessoa(); //criar um novo objeto do tipo pessoa

// como setar valores para os atributos de um objeto

$pessoa1->nome = "Matheus";  
$pessoa1->idade = 39;
$pessoa2->nome = "Guilherme";
$pessoa2->idade = 25;  

// como pegar ou escrever o conteudo de uma atribo
echo "<p>Nome: $pessoa1->nome </p>";
echo "<p>idade: $pessoa1->idade </p>";
echo "<hr>";
echo "<p>Nome: $pessoa2->nome </p>";
echo "<p>idade: $pessoa2->idade </p>";

echo "<pre>";
var_dump($pessoa1);
var_dump($pessoa2);
echo "</pre>";
?>