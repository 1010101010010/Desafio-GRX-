<?php
$perguntas = array("Você se considera bom em lógica?", 
"Gosta de aprender com desafios?", 
"Gostaria de fazer parte da GRX?",
"Por favor, justigique a resposta anterior(Gostaria de fazer parte da GRX");

$respostas = array("Sim",
 "Sim", 
 "Agora!", 
 "Quero muito começar a trabalhar nessa área!, e com isso ir montando minha carreira.");
$pos = 0;
$msg = "";
if(isset($_POST["btNovapergunta"])){
    $pos = SortearPergunta(4);
}   
if(isset($_POST["btResponder"])){
$pos = $_POST["pos"];   
$resposta = $resposta[$pos];
if($resposta == $_POST["resposta"]){
    $msg = "<h1>Parabens!!! Você acertou.</h1>";
}else{
    $msg = "<h1>Que pena!!! Você errou. tente novamente</h1>";
}

}else{

$pos = SortearPergunta(4);
}
function SortearPergunta ($tl){
    return rand (0, $tl-1);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset = "UTF-8">
    <title>Desafio Coleta - GRX</title>
</head>
<body>
    <h1>Desafio Coleta - GRX</h1>
    <h2> tente responder a pergunta </h2>
    <h2>Pergunta: <?php echo $perguntas[$pos] ?></h2>
    <form method= "post" action= "#">
        <input type= "text" name= "resposta"/>
        <input type= "hidden" name= "pos" value="<?php echo $pos; ?>">
        <input type= "submit" name= "btResponder" value= "Responder" />
    </form>
    <form method= "post" action= "#">
    <input type= "submit" name= "btNovapergunta" value= "Nova pergunta" />
    </form>

    <?php echo $msg; ?>
</body>
</html>





   