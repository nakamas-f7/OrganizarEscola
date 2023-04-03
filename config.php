<?php
    $server = "localhost";
    $senha = 20032005;
    $user = "root";
    $database = "revisa";


    try{
        $connect = new PDO("mysql:host=$server;dbname=$database", $user, $senha );

    }catch(Exception $erro){
        echo "<h1>Erro aqui</h1>";
    }

?>