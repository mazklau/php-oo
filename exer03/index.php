<?php
  //passsando valores na url
  //www.site/aula/index.php?a=3&b=2

  $n1 = $_GET["3"]; //a /$_post para nao mostra
  $n2 = $_GET["2"]; //b /$_post para nao mostr

  echo " a mutiplicação de $n1 e $n2 é igual". ($n1 * $n2) ;
  
  $v1 = $_GET["4"]; //x
  $v2 = $_GET["3"]; //y

  echo "<h2>Valores recebidos: $v1 e $v2</h2>";
  echo " o valor absoluto de $v2 e ". abs($v2);
  echo " <br> o valor  de <sup>$v1</sup> e". pow($v1, $v2);
  echo "<br> A raiz de $v1 e". sqrt($v1);
  echo "<br> o valor de $v2 arredondado e". round($v2);
  echo "<br> o valor inteiro de $v2 e " . intval($v2);
  echo "<br> o valor de $v1 em moeda e" . number_format($v1, 2, ",", ".");
?>