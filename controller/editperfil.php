<?php
    include_once './dadosperfil.php';

    $Nome = $_POST["NomeNovo"];
    $Github = $_POST["GithubNovo"];
    $Instagram = $_POST["InstagramNovo"];
    $Website = $_POST["WebsiteNovo"];
    $Facebook = $_POST["FacebookNovo"];
    $Twitter = $_POST["TwitterNovo"];

    $_arq['pasta'] = "../arquivos/users/" . $dados['email'] ;

    $_arq['tamanho'] = 1024 + 1024 * 2;

    if($_FILES['Perfil']['error'] != 0){
        die('error ao carregar upload');
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

    header("location: ../view/perfil.php");

    exit();


?>