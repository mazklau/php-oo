<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>condiçoes</title>
</head>
<body>
    <?php
$a = isset($_POST["ano"]) ? $_POST["ano"]:1900;
$i = date("Y") - $a;

if ($i < 16){
        $tipoVoto = "nao vota"; 
   
}elseif($i >= 16 && $i < 18 || $i > 65){
        $tipoVoto = "nao obrigatorio";
   
}else{
        $tipoVoto = "obrigatorio";
}

    echo " Voce tem $i anos e seu voto $tipoVoto";

?>
</body>
</html>