<?php

    $alternativa="";

    if(isset($_POST["calcular"])){
        $botao = $_POST["calcular"];
        if(isset($_POST["alternativa"])){
            $alternativa = $_POST["alternativa"];
            
        }
    }
    
    $perguntas=array();
    
    function questao1($alternativa) {
        
        
        $perguntas[0]["questao"]="1. Qual o verdadeiro nome do lanterna verde?";
        $perguntas[0][0]=array("Arthur",false);
        $perguntas[0][1]=array("Henry Pym",false);
        $perguntas[0][2]=array("Não há um único nome",true);
        $perguntas[0][3]=array("Jack Oswald",false);
        if (is_numeric($alternativa)) {
            # code...
            if ($perguntas[0][$alternativa][1]==true){
                echo "Acertou";
            }else{
                echo "Errou";
            }
        }
        echo"<form method='post' action='index.php'>
        <label>"
        . $perguntas[0]["questao"].
        "</label><br>
                
                <input type='radio' name='alternativa' value='0'>
                <label>"
                     . $perguntas[0][0][0].
                "</label><br>
        
                <input type='radio' name='alternativa' value='1'>
                <label>".
                      $perguntas[0][1][0] .
               " </label><br>
        
                <input type='radio' name='alternativa' value='2'>
                <label>".
                   $perguntas[0][2][0].
                "</label><br>
        
                <input type='radio' name='alternativa' value='3'>
                <label>".
                     $perguntas[0][3][0].
                "</label><br><br>
        
                <input type='submit' name='calcular'>
            </form>";

    

    }

 
/*
$perguntas[1]["questao"]="2. Qual o nome de nascença do Superman?";
$perguntas[1][0]=array("Kal-El",true);
$perguntas[1][1]=array("Clark Kent",false);
$perguntas[1][2]=array("Jor-El",false);
$perguntas[1][3]=array("Virgil Hawkins",false);

if ($perguntas[1][$alternativa][1]==true){
            echo "Acertou";
        }else{
            echo "Errou";
        }
        
        
        $perguntas[2]["questao"]="3. Qual o primeiro vilão enfrentado pela liga da justiça?";
        $perguntas[2][0]=array("Prometheus, o gênio criminal",false);
        $perguntas[2][1]=array("Starro, a estrela alienígena gigante",true);
        $perguntas[2][2]=array("Darkseid",false);
        $perguntas[2][3]=array("Amazo, android imitador de poderes",false);
        
        if ($perguntas[2][$alternativa][1]==true){
            echo "Acertou";
        }else{
            echo "Errou";
        }

        
        $perguntas[3]["questao"]="4. Quais dessas heroínas são fundadoras (principais) da liga da justiça sem limites?";
        $perguntas[3][0]=array("Mulher maravilha e Canário negro",false);
        $perguntas[3][1]=array("Canário negro e Caçadora",false);
        $perguntas[3][2]=array("Mulher gavião e Caçadora",false);
        $perguntas[3][3]=array("Mulher maravilha e Mulher gavião",true);
        
        if ($perguntas[3][$alternativa][1]==true){
            echo "Acertou";
        }else{
            echo "Errou";
        }
        
        
        $perguntas[4]["questao"]="5. Sobre a Estelar, qual o seu planeta natal?";
        $perguntas[4][0]=array("Mulher maravilha e Canário negro",false);
        $perguntas[4][1]=array("Canário negro e Caçadora",false);
        $perguntas[4][2]=array("Mulher gavião e Caçadora",false);
        $perguntas[4][3]=array("Mulher maravilha e Mulher gavião",true);
        
        if ($perguntas[4][$alternativa][1]==true){
            echo "Acertou";
        }else{
            echo "Errou";
        }
        
        
        $perguntas[5]["questao"]="5. Qual a fraqueza da mulher maravilha?";
        $perguntas[5][0]=array("Kryptonita",false);
        $perguntas[5][1]=array("Magia de Ares",true);
        $perguntas[5][2]=array("Cloreto de etila",false);
        $perguntas[5][3]=array("Emoções",false);
        
        if ($perguntas[5][$alternativa][1]==true){
            echo "Acertou";
        }else{
            echo "Errou";
        }
        */
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
<?php questao1($alternativa)  ?>

</div>
</body>
</html>