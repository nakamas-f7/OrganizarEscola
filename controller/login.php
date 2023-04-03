<?php
    session_start();
    include_once '../config.php';

    $Senha = $_POST['Senha'];
    $Email = $_POST['Email'];

    if($Senha != "" && $Email != ""){
        $sql = "SELECT idT_user,email,senha FROM t_user WHERE email ='$Email' AND senha = '$Senha'";

        $query = $connect->prepare($sql);

        $query->execute();

        $fetch = $query->fetch();

        $linha = $query->rowCount();

        if($linha > 0){
            $_SESSION["Login"] = $fetch["idT_user"];
            
            header("location: ../view/home.php");
        }else{
            header("location: ../index.php");
        }


    }else{
        header("location: ../index.php");
    }

    exit();

?>