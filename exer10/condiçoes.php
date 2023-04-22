<!DOCTYPE html>
<html lang="pt-br">
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
echo "voce nasceu em $a e tera $i anos";
if ($i >= 18){ 
    $v = "ja pode votar";
    $d = "ja pode derigir";
}else{
    $v = "nao pode votar";
    $d = "nao pode derigir";
}
echo "<br>Com essa idade $i anos $v e tambem $d";
?>
</body>
</html>