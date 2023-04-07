<?php
    include_once '../config.php';

    $Nome = $_POST["NomeNovo"];
    $Descricao = $_POST["DescricaoNovo"];
    $Id = $_POST["Id"];

    $sql = "UPDATE T_materia_medio SET nome = :Nome, descricao = :Descricao WHERE idT_materia = :Id";

    $query = $connect->prepare($sql);

    $query->execute(Array(
        ":Nome" => $Nome,
        ":Descricao" => $Descricao,
        ":Id" => $Id,
    ));

    header("location: ../view/materia.php");

    exit();

?>