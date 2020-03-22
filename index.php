<?php
    if(isset($_GET['nome'])){
        $nome = $_GET['nome'];
    }else{
        $nome = 'Nome não informado';
    }

    if(isset($_GET['sobrenome'])){
        $sobrenome = $_GET['sobrenome'];
    }else{
        $sobrenome = 'Sobrenome não informado.';
    }
/////
    if(isset($_GET['genero'])){
        $genero = $_GET['genero'];
    }else {
        $genero = 'genero não informado.';
    }

///// validação do genero
    if($genero == 'masculino'){
        $mensagem = 'Seja Bem-Vindo!';
    }else if($genero == 'feminino'){
        $mensagem = 'Seja Bem-Vinda!';
    }else if($genero == ' '){
        $mensagem = 'Campo em branco';
    }else{
        $mensagem = 'Error';
    }
?>

<h1><?= $mensagem?></h1>
<hr>
<p>Olá <?= $nome.' '.$sobrenome;?></p>