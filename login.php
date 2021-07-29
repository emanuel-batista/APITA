<?php 
    include('conectar.php');
    session_start();
    include("config.php");
    $mysql = new BancodeDados();
    $mysql->conecta();
    $errors = array();
    $username = "";
    $email = "";

    $email = mysqli_real_escape_string($conexao, $_POST['email']);
    $senha = mysqli_real_escape_string($conexao, $_POST['password']);
    $nome = mysqli_real_escape_string($conexao, $_POST['name']);

    if(empty($email)){array_push($errors, "enfiou o email no cu?");}
    if(empty($senha)){array_push($errors, "enfiou a senha no cu?");}
    if(empty($nome)){array_push($errors, "tem nome não puta?");}

    $sql = "insert into users(email, senha, usuario) values
    ('$email', '$senha', '$nome');";

    $res = @mysqli_query($mysql->con, $sql) or die ("erro ao inserir");

    

