<?php
$host = "localhost";
$user = "root";
$senha = "";
$dbname = "tcc_zona_teste";
//conecta ao banco de dados
$conexao = @mysqli_connect($host, $user, $senha, $banco) or die ("Problemas com a conexão do Banco de Dados");
   
//para formatar caracteres especiais e acentos vindos do banco de dados...
    mysqli_query($conexao,"SET NAMES 'utf8'");
    mysqli_query($conexao,'SET character_set_connection=utf8');
    mysqli_query($conexao,'SET character_set_client=utf8');
    mysqli_query($conexao,'SET character_set_results=utf8');
?>