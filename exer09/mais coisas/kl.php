
<?php
$nome = isset($_POST["nome"]) ? $_POST["nome"] :[ "nao informado"];
$ano = isset($_POST["ano"]) ? $_POST["ano"] : 0 ;
$sexo = isset($_POST["sexo"]) ? $_POST["sexo"] : ["nao informado"];
$idade = date("y") - $ano;
echo " seu nome e $nome voce e $sexo e tem $idade"
?>
