<?php
    include_once './dadosperfil.php';

    $Nome = $_POST["NomeNovo"];
    $Github = $_POST["GithubNovo"];
    $Instagram = $_POST["InstagramNovo"];
    $Website = $_POST["WebsiteNovo"];
    $Facebook = $_POST["FacebookNovo"];
    $Twitter = $_POST["TwitterNovo"];

    if($_FILES['Perfil']['name'] != ""){
        $_arq['pasta'] = "../arquivos/users/" . $dados['email'] . '/imgs/fotoperfil';

        $_arq['tamanho'] = 1024 * 1024 * 20;

        $_arq['extensoes'] = array('jpg', 'png', 'gif');

        $_arq['renomeia'] = true;

        $extensao =  explode('.', $_FILES['Perfil']['name']);
        $extensao = strtolower(end($extensao));

        if(array_search($extensao, $_arq['extensoes']) === false){
            echo '<script>alert("Extensão de arquivo não reconhecida")</script>';

        }else if($_arq['tamanho'] < $_FILES['Perfil']['size']){
            echo '<script>alert("Tamanho de Arquivo não permitido")</script>';

        }else{
            if($_arq['renomeia'] == true){
                $novonome = 'fotoperfil.'. $extensao;
            }else{
                $novonome = $_FILES['Perfil']['name'];
                
            }
            
            $url = $_arq['pasta'] . '/' . $novonome;

            if(move_uploaded_file($_FILES['Perfil']['tmp_name'], $url)){
                echo '<script> alert("Arquivo movido com sucesso") </script>';
            }else{
                echo '<script> alert("Não foi possivel fazer upload de imagem ") </script>';
            }
        }
    }else{
        $url = $dados['fotoperfil'];
    }

    $sql = "UPDATE t_user SET nome = :Nome, github = :Github, instagram = :Instagram, website = :Website, facebook = :Facebook, twitter = :Twitter, fotoperfil = :FotoPerfil WHERE idT_user = :SESSAO";

    $query = $connect->prepare($sql);

    $query->execute(Array(
        ":Nome" => $Nome,
        ":Github" => $Github,
        ":Instagram" => $Instagram,
        ":Website" => $Website,
        ":Facebook" => $Facebook,
        ":Twitter" => $Twitter,
        ":FotoPerfil" => $url,
        ":SESSAO" => $_SESSION["Login"],
    ));


    header("location: ../view/perfil.php");

    exit();


?>