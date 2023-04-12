<?php
    include_once './dadosperfil.php';

    $Nome = $_POST["NomeNovo"];
    $Github = $_POST["GithubNovo"];
    $Instagram = $_POST["InstagramNovo"];
    $Website = $_POST["WebsiteNovo"];
    $Facebook = $_POST["FacebookNovo"];
    $Twitter = $_POST["TwitterNovo"];

    $_arq['pasta'] = "../arquivos/users/" . $dados['email'] . '/imgs';

    $_arq['tamanho'] = 1024 * 1024 * 2;

    $_arq['extensoes'] = array('jpg', 'png', 'gif');

    $_arq['renomeia'] = false;

    if($_FILES['Perfil']['error'] != 0){
        die('error ao carregar upload');
        exit;
    }

    $extensao =  explode('.', $_FILES['Perfil']['name']);
    $extensao = strtolower(end($extensao));

    if(array_search($extensao, $_arq['extensoes']) === false){
        echo '<h1>Extensão de arquivo não reconhecida</h1>';

    }else if($_arq['tamanho'] < $_FILES['Perfil']['size']){
        echo '<h1>Tamanho de Arquivo não permitido</h1>';

    }else{
        
        if($_arq['renomeia'] == true){
            $novonome = time(). $extensao;
            
        }else{
            
            $novonome = $_FILES['Perfil']['name'];
            
        }
        echo "Aqui";
        if(move_uploaded_file($_FILES['Perfil']['tmp_name'], $_arq['pasta'] . '/' . $novonome)){
            echo '<script> alert("Arquivo movido com sucesso") </script>';
        }else{
            echo '<script> alert("Não foi possivel fazer upload de imagem ") </script>';
        }
    }



    $sql = "UPDATE t_user SET nome = :Nome, github = :Github, instagram = :Instagram, website = :Website, facebook = :Facebook, twitter = :Twitter WHERE idT_user = :SESSAO";

    $query = $connect->prepare($sql);

    $query->execute(Array(
        ":Nome" => $Nome,
        ":Github" => $Github,
        ":Instagram" => $Instagram,
        ":Website" => $Website,
        ":Facebook" => $Facebook,
        ":Twitter" => $Twitter,
        ":SESSAO" => $_SESSION["Login"],
    ));


    echo header("location: ../view/perfil.php");

    exit();


?>