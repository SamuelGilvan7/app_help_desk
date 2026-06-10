<?php

$arquivo = fopen('arquivo.hd', 'a');

//Montagem do texto
$titulo = str_replace('/','-',$_POST['titulo']);
$descricao = str_replace('/','-',$_POST['descricao']);
$categoria = str_replace('/','-',$_POST['categoria']);


//implode()
$txt = $titulo ."/".$categoria."/".$descricao;

//Abrindo o arquivo
$arquivo = fopen('arquivo.hd', 'a');
//Escrevendo o texto
fwrite($arquivo,$txt .PHP_EOL);
//fechando o arquivo
fclose($arquivo);

header("Location:../home.php");




?>