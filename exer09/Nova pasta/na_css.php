<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php
$txt = isset($_POST["t"]) ?$_POST["t"] : "texto generico";
$tam = isset($_POST["tam"]) ?$_POST["tam"] : "12pt" ;
$cor = isset($_POST["cor"]) ?$_POST["cor"] : "#00000";
?>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>

<style>
    span.texto{
        font-size:
         <?php echo $tam; 
        ?>;
        color:
         <?php echo $cor;
         ?>;
    }
</style>
</head>
<body>
<div>
<?php
echo "<span class='texto'>$txt</span>";
?>
</div>
</body>
</html>