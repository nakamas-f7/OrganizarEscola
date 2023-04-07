<?php

    include_once '../config.php';

    $sql = "SELECT * FROM T_user WHERE idT_user = :SESSAO";

    $query = $connect->prepare($sql);

    $query->execute(Array(
        ":SESSAO" => $_SESSION["Login"],
    ));

    $dados = $query->fetch();

?>