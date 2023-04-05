<?php
    include_once '../config.php';

    $delete = $_POST["delete"];

    $sql = "DELETE FROM T_materia_medio WHERE idT_materia = :Id";

    $query = $connect->prepare($sql);

    $query->execute(Array(
        ":Id" => $delete,
    ));

    header("location: ../view/materia.php");

    exit();

?>