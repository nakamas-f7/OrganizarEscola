<?php
    include_once '../config.php';

    $Senha = $_POST["Senha"];
    $Nome = $_POST["Nome"];
    $Email = $_POST["Email"];

    $verificar = $connect->query("SELECT * FROM t_user WHERE email = '$Email'");

    $linhas = $verificar->rowCount();

    if($linhas != null){
        header('location: ../view/sign-up.php') ;
        exit();
    }else{
        $salvar = $connect->prepare("INSERT INTO T_user(nome, email, senha) VALUES (:Nome, :Email, :Senha)");

        $salvar->execute(Array(
            ":Nome" => $Nome,
            ":Email" => $Email,
            ":Senha" => $Senha,
        ));


        header("location: ../index.php");
        exit();      
    }

?>