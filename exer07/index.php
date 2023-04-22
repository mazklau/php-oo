<?php
 ///Operadores Relacionais
 // ( >,<,>=,<=,!= ou <>,== e === )
    
  $a = 9;
  $$a=-6;
  $b = 6;
 $maior = $a > $b ? $$a : $b;


///Operador Unario
 //expressao ? verdadeiro : falso
$n1 = $_GET["4"];//b
$n2 = $_GET["7"];//c
$tipo = $_GET["s"];//op
echo "os valores passados foram $n1 e $n2<br>";
$r = ($tipo == "s") ? $n1 + $n2 : $n1 * $n2;
echo "O resultado sera $r";

?>