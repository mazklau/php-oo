<?php
$nota1 = $_GET["9"];
$nota2 = $_GET["4"];
$m = ($nota1+$nota2)/2;
echo "a media da nota $nota1 e $nota2 e igual $m";
echo "A situaçao do aluno e ".(($m < 6) ? "reprovado" : "aprovado");
?>