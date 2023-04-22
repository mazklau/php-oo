<?php
$n1 = isset($_POST["nota1"]);
$n2 = isset($_POST["nota2"]);
$m  = ($n1/2) + ($n2/2) ; 
if($m < 4.5) {
    $a = "Reprovado";
}elseif($m <= 6.5){
    $a = "Recuperação";
}else{
    $a = "Aprovado";
}
echo "Nota do aluno e $m <br>";
echo "Ficara de $a"

?>