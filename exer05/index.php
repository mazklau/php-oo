<?php
  //operadores
$preco = $_GET["p"];
echo "o preço do produto e R$ $preco";
$preco += ($preco * 10 / 1000);
echo "<br>E o novo preço com 10% de aumento sera R$". number_format($preco,2, ",",".");
//$preco -= ($preco * 10 / 100);
//echo "<br>E o novo preço com 10% de desconto sera R$". number_format($preco,2, ",",".");

// preencremeto       /// incremento /// ele ultiliza o primeiro o que ja estava salvo no variaveis
// --a voltar        /// a++ depois

$atual = $_GET["2022"];//aa
echo "o ano atual e $atual e o ano anterior e" . --$atual;

$a = 3;
$b = $a;
$b += 5;
echo "A variavel a valer $a";
echo "A variavel b valer $b";

$a1 =3;
$b1 = &$a1;
echo "A variavel b valer $a1";
echo "A variavel b valer $b1";
// ^..   
?>