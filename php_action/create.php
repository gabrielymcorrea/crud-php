<?php
session_start();
require_once 'db_connect.php';

if(isset($_POST['btn-cadastrar'])):
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $sobrenome = mysqli_escape_string($connect, $_POST['sobrenome']);
    $emal = mysqli_escape_string($connect, $_POST['email']);
    $idade = mysqli_escape_string($connect, $_POST['idade']);


    //inserir
    $sql = "INSERT INTO clientes (nome, sobrenome, email, idade) VALUES ('$nome', '$sobrenome', '$emal',  '$idade')";

    //Verificar
    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "Cadastro com sucesso";
        header('Location: ../index.php?');
    else:
        $_SESSION['mensagem'] = "Erro ao cadastrar";
        header('Location: ../index.php?');
    endif;

endif;
?>