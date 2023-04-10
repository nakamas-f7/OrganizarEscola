<?php

    include_once '../config.php';

    $sql = "SELECT nome, website, github, twitter, instagram, facebook FROM T_user";

    $query = $connect->prepare($sql);

    $query->execute();
?>