<?php
 
$nota1 = $_GET['nota1'];
$nota2 = $_GET['nota2'];
$nota3 = $_GET['nota3'];
$nota4 = $_GET['nota4'];
$resultado = ($nota1+$nota2+$nota3+$nota4) / 4;

if($resultado == 10){
    $mensagem = 'Média 10, Show Bruxo!';
}else if($resultado == 0){
    $mensagem = 'Média 0, se Fodeu!';
}else if($resultado >= 7){
    $mensagem = 'Aprovou na sorte!';
}else{
    $mensagem = 'Reprovou Babaca!';
}

echo $mensagem.' <br>Sua nota foi de: '.$resultado;

?>