<?php


    $perguntas=array();
    $alternativa1="";
    $alternativa2="";
    $alternativa3="";
    $alternativa4="";
    $alternativa5="";
    $alternativa6="";
    $pontuacao=0;

  
    


  

    
    
    function questao1() {
        
        
        $perguntas[0]["questao"]="1. Qual o verdadeiro nome do lanterna verde?";
        $perguntas[0][0]=array("Arthur",false);
        $perguntas[0][1]=array("Henry Pym",false);
        $perguntas[0][2]=array("Não há um único nome",true);
        $perguntas[0][3]=array("Jack Oswald",false);

        echo"
        <p id='questao1'></p>
        <label>"
        . $perguntas[0]["questao"].
        "</label><br>        
        <input type='radio' name='alternativa1' value='0'>
        <label>"
        . $perguntas[0][0][0].
        "</label><br>
        <input type='radio' name='alternativa1' value='1'>
        <label>"
        . $perguntas[0][1][0] .
        " </label><br>
        <input type='radio' name='alternativa1' value='2'>
        <label>"
        . $perguntas[0][2][0].
        "</label><br>
        <input type='radio' name='alternativa1' value='3'>
        <label>"
        . $perguntas[0][3][0].
        "</label><br><br>
        
        
        <a href='#questao2'>Próximo</a>
        
       "
        
        ;
    }

    function questao2(){

        $perguntas[1]["questao"]="2. Qual o nome de nascença do Superman?";
        $perguntas[1][0]=array("Kal-El",true);
        $perguntas[1][1]=array("Clark Kent",false);
        $perguntas[1][2]=array("Jor-El",false);
        $perguntas[1][3]=array("Virgil Hawkins",false);

        echo "
        <p id='questao2'></p>
        <label>"
        . $perguntas[1]["questao"]."</label><br>
        <input type='radio' name='alternativa2' value='0'>
        <label>"
        . $perguntas[1][0][0]."</label><br>
        <input type='radio' name='alternativa2' value='1'>
        <label>"
        . $perguntas[1][1][0] .
        " </label><br>
        <input type='radio' name='alternativa2' value='2'>
        <label>"
        . $perguntas[1][2][0].
        "</label><br>
        <input type='radio' name='alternativa2' value='3'>
        <label>"
        . $perguntas[1][3][0].
        "</label><br><br>
        <p id='questao2'></p>
        
        <a href='#questao3'>Próximo</a>
        ";

    } 
    function questao3(){

        $perguntas[2]["questao"]="3. Qual o primeiro vilão enfrentado pela liga da justiça?";
        $perguntas[2][0]=array("Prometheus, o gênio criminal",false);
        $perguntas[2][1]=array("Starro, a estrela alienígena gigante",true);
        $perguntas[2][2]=array("Darkseid",false);
        $perguntas[2][3]=array("Amazo, android imitador de poderes",false);
       

        echo"<label>
        <p id='questao3'></p>"
        . $perguntas[2]["questao"]."</label><br>
        <input type='radio' name='alternativa3' value='0'>
        <label>"
        . $perguntas[2][0][0]."</label><br>
        <input type='radio' name='alternativa3' value='1'>
        <label>"
        . $perguntas[2][1][0] .
        " </label><br>
        <input type='radio' name='alternativa3' value='2'>
        <label>"
        . $perguntas[2][2][0].
        "</label><br>
        <input type='radio' name='alternativa3' value='3'>
        <label>"
        . $perguntas[2][3][0].
        "</label><br><br>
        <a href='#questao4'>Próximo</a>
        
        ";
    }
        
    function questao4(){

        $perguntas[3]["questao"]="4. Quais dessas heroínas são fundadoras (principais) da liga da justiça sem limites?";
        $perguntas[3][0]=array("Mulher maravilha e Canário negro",false);
        $perguntas[3][1]=array("Canário negro e Caçadora",false);
        $perguntas[3][2]=array("Mulher gavião e Caçadora",false);
        $perguntas[3][3]=array("Mulher maravilha e Mulher gavião",true);
       
        
        echo"<label>
        <p id='questao4'></p>"
        . $perguntas[3]["questao"]."</label><br>
        <input type='radio' name='alternativa4' value='0'>
        <label>"
        . $perguntas[3][0][0]."</label><br>
        <input type='radio' name='alternativa4' value='1'>
        <label>"
        . $perguntas[3][1][0] .
        " </label><br>
        <input type='radio' name='alternativa4' value='2'>
        <label>"
        . $perguntas[3][2][0].
        "</label><br>
        <input type='radio' name='alternativa4' value='3'>
        <label>"
        . $perguntas[3][3][0].
        "</label><br><br>
        <a href='#questao5'>Próximo</a>
        ";
    
    }

    function questao5(){

        $perguntas[4]["questao"]="5. Sobre a Estelar, qual o seu planeta natal?";
        $perguntas[4][0]=array("Mulher maravilha e Canário negro",false);
        $perguntas[4][1]=array("Canário negro e Caçadora",false);
        $perguntas[4][2]=array("Mulher gavião e Caçadora",false);
        $perguntas[4][3]=array("Mulher maravilha e Mulher gavião",true);

        echo"<label><p id='questao5'></p>"
        . $perguntas[4]["questao"]."</label><br>
        <input type='radio' name='alternativa5' value='0'>
        <label>"
        . $perguntas[4][0][0]."</label><br>
        <input type='radio' name='alternativa5' value='1'>
        <label>"
        . $perguntas[4][1][0] .
        " </label><br>
        <input type='radio' name='alternativa5' value='2'>
        <label>"
        . $perguntas[4][2][0].
        "</label><br>
        <input type='radio' name='alternativa5' value='3'>
        <label>"
        . $perguntas[4][3][0].
        "</label><br><br>
        <a href='#questao6'>Próximo</a>

        ";
    }

    function questao6(){
        $perguntas[5]["questao"]="6. Qual a fraqueza da mulher maravilha?";
        $perguntas[5][0]=array("Kryptonita",false);
        $perguntas[5][1]=array("Magia de Ares",true);
        $perguntas[5][2]=array("Cloreto de etila",false);
        $perguntas[5][3]=array("Emoções",false);
        echo"<label> <p id='questao6'></p>"
        . $perguntas[5]["questao"]."</label><br>
        <input type='radio' name='alternativa6' value='0'>
        <label>"
        . $perguntas[5][0][0]."</label><br>
        <input type='radio' name='alternativa6' value='1'>
        <label>"
        . $perguntas[5][1][0] .
        " </label><br>
        <input type='radio' name='alternativa6' value='2'>
        <label>"
        . $perguntas[5][2][0].
        "</label><br>
        <input type='radio' name='alternativa6' value='3'>
        <label>"
        . $perguntas[5][3][0].
        "</label><br><br>
        <a href='#questao1'>Recomeçar</a>
        <input type='submit' value='finalizar' name='calcular'>
        
        </form> 
        ";    
    }
  
    questao1();
    questao2();
    questao3();
    questao4();
    questao5();
    questao6();
    if(isset($_POST["calcular"])){
        $botao = $_POST["calcular"];
        if(isset($_POST["alternativa1"])){
            $alternativa1 = $_POST["alternativa1"];
            
        }
        if(isset($_POST["alternativa2"])){
            $alternativa2 = $_POST["alternativa2"];
            
        }
        if(isset($_POST["alternativa3"])){
            $alternativa3 = $_POST["alternativa3"];
            
        }
        if(isset($_POST["alternativa4"])){
            $alternativa4 = $_POST["alternativa4"];
            
        }
        if(isset($_POST["alternativa5"])){
            $alternativa5 = $_POST["alternativa5"];
            
        }
        if(isset($_POST["alternativa6"])){
            $alternativa6 = $_POST["alternativa6"];
            
        }
        
        # code...
        if (is_numeric($alternativa1)) {
            # code...
            if ($perguntas[0][$alternativa1][1]==true){
                echo "Acertou";
                $pontuacao++;
                echo $pontuacao;
            }else{
                echo "Errou";
            }
        }
        if (is_numeric($alternativa2)) {
            # code...
            if ($perguntas[1][$alternativa2][1]==true){
                echo "Acertou";
                $pontuacao++;
                echo $pontuacao;
            }else{
                echo "Errou";
            }
        }
        if (is_numeric($alternativa3)) {
            # code...
            if ($perguntas[2][$alternativa3][1]==true){
                echo "Acertou";
                $pontuacao++;
                echo $pontuacao;
            }else{
                echo "Errou";
            }
        }
        if (is_numeric($alternativa4)) {
            # code...
            if ($perguntas[3][$alternativa4][1]==true){
                echo "Acertou";
                $pontuacao++;
                echo $pontuacao;
            }else{
                echo "Errou";
            }
        }
        if (is_numeric($alternativa5)) {
            # code...
            if ($perguntas[4][$alternativa5][1]==true){
                echo "Acertou";
                $pontuacao++;
                echo $pontuacao;
            }else{
                echo "Errou";
            }
        }
        if (is_numeric($alternativa6)) {
            # code...
            if ($perguntas[5][$alternativa6][1]==true){
                echo "Acertou";
                $pontuacao++;
                echo $pontuacao;
            }else{
                echo "Errou";
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
<link rel="stylesheet" type="text/css" href="style.css">

</head>
<style>
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
<?php 

    
?>

</div>
</body>
</html>