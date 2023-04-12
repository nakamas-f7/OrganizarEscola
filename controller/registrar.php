<?php
    function Pastas($user){
        if(!file_exists('../arquivos/users/'. $user)){
            mkdir('../arquivos/users/'. $user);
            if(file_exists('../arquivos/users/'. $user)){
                mkdir('../arquivos/users/'. $user . '/chats');
                mkdir('../arquivos/users/'. $user . '/imgs');
                mkdir('../arquivos/users/'. $user . '/videos');
                mkdir('../arquivos/users/'. $user . '/imgs/fotoperfil' );
            }else{
                echo '<script>alert("Não deu")</script>';
            }

        }
    }

    include_once '../config.php';

    $Senha = $_POST["Senha"];
    $Nome = $_POST["Nome"];
    $Email = $_POST["Email"];

    $verificar = $connect->query("SELECT * FROM t_user WHERE email = '$Email'");

    $linhas = $verificar->rowCount();

    if($linhas != null){
        echo '<script>alert("Usuário já existe")</script>'.
         '<script>window.location = "../view/sign-up.php"</script>';
        exit();
    }else{
        $salvar = $connect->prepare("INSERT INTO T_user(nome, email, senha) VALUES (:Nome, :Email, :Senha)");

        $salvar->execute(Array(
            ":Nome" => $Nome,
            ":Email" => $Email,
            ":Senha" => $Senha,
        ));

        Pastas($Email);

        header("location: ../index.php");
        exit();      
    }

?>