<?php
    include_once '../config.php';

    $Nome_materia = $_POST["nome"];
    $Descricao = $_POST["descricao"];

    $query = $connect->query("SELECT * FROM T_materia_medio WHERE nome = '$Nome_materia'");

    $row = $query->rowCount();

    if($row != null){
        header("location: ../view/medio/newatividade.php");

        exit();
    }else{
        $salvar = $connect->prepare("INSERT INTO T_materia_medio(nome,descricao) VALUES (:Nome, :Descricao)");

        $salvar->execute(Array(
            ":Nome" => $Nome_materia,
            ":Descricao" => $Descricao,
        ));

        header("location: ../view/medio/materia.php");

        exit();
    }


?>