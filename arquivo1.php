<?php

    $perguntas=array();
    $alternativa1="";
    $alternativa2="";
    $alternativa3="";
    $alternativa4="";
    $alternativa5="";
    $alternativa6=""; 
    $pontuacao=0;
    $posicao=0;
    
    
    //questoes
    //1
    $perguntas[0]["questao"]="1. Qual o verdadeiro nome do lanterna verde?";
    $perguntas[0][0]=array("Arthur",false);
    $perguntas[0][1]=array("Henry Pym",false);
    $perguntas[0][2]=array("Não há um único nome",true);
    $perguntas[0][3]=array("Jack Oswald",false);

    //2
    $perguntas[1]["questao"]="2. Qual o nome de nascença do Superman?";
    $perguntas[1][0]=array("Kal-El",true);
    $perguntas[1][1]=array("Clark Kent",false);
    $perguntas[1][2]=array("Jor-El",false);
    $perguntas[1][3]=array("Virgil Hawkins",false);

    //3
    $perguntas[2]["questao"]="3. Qual o primeiro vilão enfrentado pela liga da justiça?";
    $perguntas[2][0]=array("Prometheus, o gênio criminal",false);
    $perguntas[2][1]=array("Starro, a estrela alienígena gigante",true);
    $perguntas[2][2]=array("Darkseid",false);
    $perguntas[2][3]=array("Amazo, android imitador de poderes",false);

    //4
    
    $perguntas[3]["questao"]="4. Quais dessas heroínas são fundadoras (principais) da liga da justiça sem limites?";
    $perguntas[3][0]=array("Mulher maravilha e Canário negro",false);
    $perguntas[3][1]=array("Canário negro e Caçadora",false);
    $perguntas[3][2]=array("Mulher gavião e Caçadora",false);
    $perguntas[3][3]=array("Mulher maravilha e Mulher gavião",true);

    //5
    $perguntas[4]["questao"]="5. Sobre a Estelar, qual o seu planeta natal?";
    $perguntas[4][0]=array("Mulher maravilha e Canário negro",false);
    $perguntas[4][1]=array("Canário negro e Caçadora",false);
    $perguntas[4][2]=array("Mulher gavião e Caçadora",false);
    $perguntas[4][3]=array("Mulher maravilha e Mulher gavião",true);

    //6
    $perguntas[5]["questao"]="6. Sobre a Estelar, qual o seu planeta natal?";
    $perguntas[5][0]=array("Mulher maravilha e Canário negro",false);
    $perguntas[5][1]=array("Canário negro e Caçadora",false);
    $perguntas[5][2]=array("Mulher gavião e Caçadora",false);
    $perguntas[5][3]=array("Mulher maravilha e Mulher gavião",true);
    
    //7
    $perguntas[6]["questao"]="7. O Aquaman é Rei da onde?";
    $perguntas[6][0]=array("Mares",true);
    $perguntas[6][1]=array("Terra",false);
    $perguntas[6][2]=array("Neve",false);
    $perguntas[6][3]=array("Ares",false);
    
    //8
    $perguntas[7]["questao"]="8. Sobre a Estelar, qual o seu planeta natal?";
    $perguntas[7][0]=array("Mulher maravilha e Canário negro",false);
    $perguntas[7][1]=array("Canário negro e Caçadora",false);
    $perguntas[7][2]=array("Mulher gavião e Caçadora",false);
    $perguntas[7][3]=array("Mulher maravilha e Mulher gavião",true);
        
    //9
    $perguntas[8]["questao"]="9. Sobre a Estelar, qual o seu planeta natal?";
    $perguntas[8][0]=array("Mulher maravilha e Canário negro",false);
    $perguntas[8][1]=array("Canário negro e Caçadora",false);
    $perguntas[8][2]=array("Mulher gavião e Caçadora",false);
    $perguntas[8][3]=array("Mulher maravilha e Mulher gavião",true);
    
    //10
    $perguntas[9]["questao"]="10. Qual a fraqueza da mulher maravilha?";
    $perguntas[9][0]=array("Kryptonita",false);
    $perguntas[9][1]=array("Magia de Ares",true);
    $perguntas[9][2]=array("Cloreto de etila",false);
    $perguntas[9][3]=array("Emoções",false);

    
    
    function questoes() {
        global $perguntas;
        global $posicao;

        echo "
        <div class='questoes'>
        
        <p id='questao".$posicao+1 . "'></p>
        <label>"
        . $perguntas[$posicao]["questao"].
        "</label><br>        
        <input type='radio' name='alternativa" . $posicao+1 . "' value='0'>
        <label>"
        . $perguntas[$posicao][0][0].
        "</label><br>
        <input type='radio' name='alternativa" . $posicao+1 . "' value='1'>
        <label>"
        . $perguntas[$posicao][1][0] .
        " </label><br>
        <input type='radio' name='alternativa1 " . $posicao+1 . "' value='2'>
        <label>"
        . $perguntas[$posicao][2][0].
        "</label><br>
        <input type='radio' name='alternativa1 " . $posicao+1 . "' value='3'>
        <label>"
        . $perguntas[$posicao][3][0].
        "</label><br><br>
        
        
        <a href='#questao".$posicao+2 ."'>Próximo</a>
        $posicao
        </div>
        "
        ;
        $posicao++;
        if ($posicao==9) {
            # code...
            echo "</div>";
        }
    }
    
    
    
    if(isset($_POST['calcular'])){
        if (isset($_POST['alternativa1'])) {
            $alternativa1=$_POST['alternativa1'];
        }
        
    
        if(isset($_POST['alternativa2'])){
            $alternativa2=$_POST['alternativa2'];
        }
        if(isset($_POST['alternativa3'])){
            $alternativa3=$_POST['alternativa3'];
        }
        if(isset($_POST['alternativa4'])){
            $alternativa4=$_POST['alternativa4'];
        }
        if(isset($_POST['alternativa5'])){
            $alternativa5=$_POST['alternativa5'];
        }
        if(isset($_POST['alternativa6'])){
            $alternativa5=$_POST['alternativa6'];
        }
        if(isset($_POST['alternativa7'])){
            $alternativa5=$_POST['alternativa7'];
        }
        if(isset($_POST['alternativa8'])){
            $alternativa5=$_POST['alternativa8'];
        }
        if(isset($_POST['alternativa9'])){
            $alternativa5=$_POST['alternativa9'];
        }
        if(isset($_POST['alternativa10'])){
            $alternativa5=$_POST['alternativa10'];
        }
        if(is_numeric($alternativa1)){
            
            if ($perguntas[0][$alternativa1][1]==true) {
                $pontuacao++;
                echo $pontuacao;
            }else {
                echo "Errou";
                echo $pontuacao;
            }
        }
    }
    ?>
        
        
        <!DOCTYPE html>
        <html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Planejamento</title>


</head>
<style>
    .questoes{
        width: 100%;
        height: 100%;
    }
    .pa{
        color: white;
    }
    form{
        margin-bottom: 100%;
    }

    html {
        scroll-behavior: smooth;
        
    }
</style>
<body>
<div class="container-fluid">
    <form action="arquivo1.php" method="post">

        <?php 
            questoes();
            questoes();
            questoes();
            questoes();
            questoes();
            questoes();
            questoes();
            questoes();
            questoes();
            
        ?>
        <input type='submit' value='Finalizar' name='calcular'>
    </form>

</div>
</body>
</html>