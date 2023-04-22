<?php
// operaçao logico
// and ou && , or || , xor , !
$ano = $_get["1997"];
$idade =2022 - $ano;
echo "quem nasceu em $ano tem $idade";
echo "seu votor e". ($idade >=18 && $idade<=54) ? "Obrigatorio" : "Não obrigatorio";
?>