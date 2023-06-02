<?php

$alternativa="";

if(isset($_POST["calcular"])){
    $botao = $_POST["calcular"];
    if(isset($_POST["alternativa"])){
        $alternativa = $_POST["alternativa"];
     
    }
}
$perguntas=array();


    $perguntas[0]["questao"]="1. qual o verdadeiro nome do lanterna verde?";
    $perguntas[0][0]=array("alternativa 1",false);
    $perguntas[0][1]=array("alternativa 2",false);
    $perguntas[0][2]=array("alternativa 3",true);
    $perguntas[0][3]=array("alternativa 4",false);


if ($perguntas[0][$alternativa][1]==true){
    echo "Acertou";
}else{
    echo "Errou";
}


?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planejamento</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container-fluid">

<form method="post" action="index.php">
<label>
    <?php
    echo $perguntas[0]["questao"]
    ?>
</label>

<br>

<input type="radio" name="alternativa" value="0">
<label><?php
    echo $perguntas[0][0][0]
?></label>

<br>

<input type="radio" name="alternativa" value="1">
<label><?php
    echo $perguntas[0][1][0]
?></label>

<br>

<input type="radio" name="alternativa" value="2">
<label><?php
    echo $perguntas[0][2][0]
?></label> 
<br>

<input type="radio" name="alternativa" value="3">
<label><?php
    echo $perguntas[0][3][0]
?></label>

<br>

<input type="submit" name="calcular">


</form>


</div>
</body>
</html>