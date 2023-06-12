<?php

    //variáveis
        $calculo = "";
        $jaexe=false;
        $alternativa=array();
        $posi_alternativa=0;
        $posicao = 0;
        $posicaoalternada=array(0,1,2,3,4,5,6,7,8,9);
        shuffle($posicaoalternada);
        $ponto = 0;
        $mais_homi="";
        
    $perguntas = array();

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
    
    if(isset($_POST["Calcular"])){
        $calculo = $_POST["Calcular"];

        //Pegando a opção dada pelo usuário
        if(isset($_POST["alternativa1"])){
            $alternativa[0] = $_POST["alternativa1"];
        }

        if(isset($_POST["alternativa2"])){
            $alternativa[1] = $_POST["alternativa2"];
        }

        if(isset($_POST["alternativa3"])){
            $alternativa[2] = $_POST["alternativa3"];
        }

        if(isset($_POST["alternativa4"])){
            $alternativa[3] = $_POST["alternativa4"];
        }

        if(isset($_POST["alternativa5"])){
            $alternativa[4] = $_POST["alternativa5"];
        }
        if(isset($_POST["alternativa6"])){
            $alternativa[5] = $_POST["alternativa6"];
        }

        if(isset($_POST["alternativa7"])){
            $alternativa[6] = $_POST["alternativa7"];
        }

        if(isset($_POST["alternativa8"])){
            $alternativa[7] = $_POST["alternativa8"];
        }

        if(isset($_POST["alternativa9"])){
            $alternativa[8] = $_POST["alternativa9"];
        }

        if(isset($_POST["alternativa10"])){
            $alternativa[9] = $_POST["alternativa10"];
        }
        if(isset($_POST["mais_homi"])){
            $mais_homi= $_POST["mais_homi"];
        }

        function pontuacao(){
            global $posi_alternativa;
            global $alternativa;
            global $perguntas;
            global $ponto;
            if ($perguntas[$posi_alternativa][$alternativa[$posi_alternativa]][1]==true) {
                # code...
                $ponto++;
            }
            $posi_alternativa++;
        }
        for ($i=0; $i < 10; $i++) { 
            pontuacao();
        }

        echo"<center><div class='resultado'>

                <center><p id='pontuacao'><br>
                Parabens ".$mais_homi."!!! Você acertou
                " . $ponto ." de 10</p></center>
                <a href='#questao1'> Recomeçar </a>
        
            </div></center> 
            "; 
            $jaexe=true;
        }
        //função da pergunta. Boa sorte pra entender :)

    


        function perguntas(){
            global $perguntas;
            global $posicao;
            global $jaexe;
            
            if($posicao==0){
                echo " 
    <center>    <section class='area-teste'>
        <div class='teste'>
            <div class='questao".$posicao."'>
        <center>  <h1>INSIRA SEU NICK</h1>  <input type='text' placeholder= Nickname autocomplete= 'off'
        name='mais_homi'>
    <a href='#questao1'>Começar</a> </center>
       </div>
            </div>
                </section>  </center>";
            }

            echo " <center>
            <p id='questao". $posicao+1 ."'> </p>
           <br> 
            <div class='questao".$posicao+1 ."'><br>";
            if ($posicao>0){
                echo "<a href='#questao". $posicao ."' >Voltar</a><br>";
                }
                echo "<label for=''>" . $perguntas[$posicao]['questao'] . "</label><br>
                
                <input type='radio' name='alternativa" . $posicao+1 . "' value='0'>
                <label for=''>" . $perguntas[$posicao][0][0] . "</label><br>
                
                <input type='radio' name='alternativa" . $posicao+1 . "' value='1'>
                <label for=''>" . $perguntas[$posicao][1][0] . "</label><br>
                
                <input type='radio' name='alternativa" . $posicao+1 . "' value='2'>
                <label for=''>" . $perguntas[$posicao][2][0] . "</label><br>
                
                <input type='radio' name='alternativa" . $posicao+1 . "' value='3'>
                <label for=''>" . $perguntas[$posicao][3][0] . "</label><br>
                
                ";
                if ($posicao==9){
                    echo "<input type='submit' name='Calcular' value='Finalizar'>";
                }else{
                echo "<a href='#questao". $posicao+2 ."' >Próximo</a>";
                if ($jaexe==true) {
                    echo "<br><br><a href='#pontuacao'>Desistir e voltar para pontuação</a><br>";
                }

            }
            echo "</div> </center>";
            $posicao++;
        }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QUIZ</title>
    <link rel="stylesheet" href="style1.css">
</head>
<style>
   /* CSS das questões */
</style>
<body>
<div class="container-fluid">
    <form action="arquivo1.php" method="post">

        <?php 
            perguntas();
            perguntas();
            perguntas();
            perguntas();
            perguntas();
            perguntas();
            perguntas();
            perguntas();
            perguntas();
            perguntas();
        ?>
    </form>
</div>
  
</body>
</html>
