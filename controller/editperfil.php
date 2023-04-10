<?php

    include_once '../config.php';

    $Nome = $_POST["NomeNovo"];
    $Github = $_POST["GithubNovo"];
    $Instagram = $_POST["InstagramNovo"];
    $Website = $_POST["WebsiteNovo"];
    $Facebook = $_POST["FacebookNovo"];
    $Twitter = $_POST["TwitterNovo"];

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