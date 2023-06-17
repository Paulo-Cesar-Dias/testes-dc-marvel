<?php

    $final = 0;
    $pq = 0;
    $pt = 0;
    $alt = "";
    $jaexe = "";

    $class=array("normal","normal","normal","normal");
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
    $perguntas[3]["questao"]="4. Qual a comida preferida do Batman?";
    $perguntas[3][0]=array("Bolos",false);
    $perguntas[3][1]=array("Bife",false);
    $perguntas[3][2]=array("Nachos",true);
    $perguntas[3][3]=array("Sorvete",false);

    //5
    $perguntas[4]["questao"]="5. Sobre a Estelar, qual o seu planeta natal?";
    $perguntas[4][0]=array("Terra",false);
    $perguntas[4][1]=array("Azarath",false);
    $perguntas[4][2]=array("Godthab",false);
    $perguntas[4][3]=array("Tamaran",true);

    //6
    $perguntas[5]["questao"]="6. Qual o nome do primeiro intérprete do Homem-Aranha no MCU?";
    $perguntas[5][0]=array("Nicholas Hammond",false);
    $perguntas[5][1]=array("Tobey  Maguire",false);
    $perguntas[5][2]=array("Tom Holland",true);
    $perguntas[5][3]=array("Andrew Garfield",false);

    //7
    $perguntas[6]["questao"]="7. Quantas jóias do infinito podem ser anexadas na manopla do Thanos?";
    $perguntas[6][0]=array("7 jóias",false);
    $perguntas[6][1]=array("6 jóias",true);
    $perguntas[6][2]=array("4 jóias",false);
    $perguntas[6][3]=array("5 jóias",false);

    //8
    $perguntas[7]["questao"]="8. Qual o verdadeiro nome do Pantera Negra?";
    $perguntas[7][0]=array("Chadwick Boseman",false);
    $perguntas[7][1]=array("N’Jadaka",false);
    $perguntas[7][2]=array("T’Chaka",false);
    $perguntas[7][3]=array("T'Challa",true);
        
    //9
    $perguntas[8]["questao"]="9. Qual o primeiro par romântico do homem-aranha nas HQ?";
    $perguntas[8][0]=array("Gwen Stacy",true);
    $perguntas[8][1]=array("Michelle Jones",false);
    $perguntas[8][2]=array("Gata Negra",false);
    $perguntas[8][3]=array("Mary Jane",false);

    //10
    $perguntas[9]["questao"]="10. Os nomes respectivos reais dos personagens Capitão América, Hulk e Homem de Ferro são:";
    $perguntas[9][0]=array("Tony Stark, Steve Rogers e Bruce Wayne",false);
    $perguntas[9][1]=array("Steve Rogers, Tony Stark e Bruce Banner",false);
    $perguntas[9][2]=array("Clark Kent, Bruce Banner e Tony Stark",false);
    $perguntas[9][3]=array("Steve Rogers, Bruce Banner e Tony Stark",true);

    if(isset($_POST['proximo'])){
        $pq = $_POST['passar'] + 1;
        $pt=$_POST['pontos'];
    }

    if(isset($_POST['voltar'])){
        $pq = $_POST['passar'] - 1;
        $pt=$_POST['pontos'];
    }
    
    if(isset($_POST['finalizar'])){
        $final = $_POST['finalizar'];

        $pq = $_POST['passar']+1;
        $pt = $_POST['pontos'];

        echo "
        <div class = 'finalizando'> 
            <center>
            Sua pontuação é : " .$pt.
        "</div>"; 

    }

    if(isset($_POST['alternativa'])){

        $alt=$_POST['alternativa'];
        $pt=$_POST['pontos'];
        $pq = $_POST['passar']-1;
        $jaexe="disabled";

        if(is_numeric($alt)){

            if($perguntas[$pq][$alt][1]==true){
                echo "acertou";
                $pt = $pt+100;
                $class[$alt]="acertou";
            }else{
                echo "errou";
                $class[$alt]="errou";
            }    
        }

        $pq = $_POST['passar'];

    }

function perguntas($posicao){

    global $perguntas;
    global $pt;
    global $class;
    global $jaexe;
   
    if($posicao==0){
        
        echo " 
        <center>
            <section class='area-teste'>
                <div class='teste'>
                    <div class='questao". $posicao ."'>
                        <center>
                            <h1>INSIRA SEU NICK</h1>
                            <input type='text' 
                            placeholder= Nickname autocomplete= 'off'
                            name='mais_homi'>
                            
                            <input type='submit' name='proximo' value='Começar'> 
                        </center>
                    </div>
                </div>
            </section>
        </center>";

    }else{

        $posicao--;

        if($posicao<10){
            echo "
            <center>
                <div class='questao". $posicao+1 ."'><br>";

                    echo $pt;

                    echo "<br>";

                    echo "<label for=''>" . $perguntas[$posicao]['questao'] . "</label><br>
                    <div class=". $class[0] .">
                        <input type='submit' ". $jaexe ." name='alternativa' value='0'>
                        <label for=''>" . $perguntas[$posicao][0][0] . "</label><br>
                    </div>
                    <div class=". $class[1] .">    
                        <input class='chora_nao' ". $jaexe ." type='submit' name='alternativa' value='1'>
                        <label for=''>" . $perguntas[$posicao][1][0] . "</label><br>
                    </div>
                    <div class=". $class[2] .">
                        <input class='chora_nao' ". $jaexe ."  type='submit' name='alternativa' value='2'>
                        <label for=''>" . $perguntas[$posicao][2][0] . "</label><br>
                    </div>
                    <div class=". $class[3] .">
                        <input class='chora_nao' ". $jaexe ." type='submit' name='alternativa' value='3'>
                        <label for=''>" . $perguntas[$posicao][3][0] . "</label>
                    </div>
                    
                    <br>";

                    if($posicao == 9){
                        echo "<input type='submit' name='finalizar' value='Finalizar'>";
                    }else{
                        echo "<input type='submit' name='proximo' value='Próximo'>";
                    }
            echo "
                </div> 
            </center>";
        }else{
            echo "Exibindo tela final";
        }

    }

}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="style1.css">
    <script src='main.js'></script>
</head>
<body>
<div class="container-fluid">

    <h1>QUIZ MARVEL/DC</h1>

    <form action="exemplo.php" method="post">
        <input type="text" name="passar" hidden value="<?php echo $pq?>"/>
        <input type="text" name="pontos" hidden value="<?php echo $pt?>"/>
        <?php perguntas($pq) ?>
    </form>

</div>
</body>
</html>