<?php
    $localhost = "localhost";
    $db = "projeto";
    $senha = "";
    $usuario = "root";

    $conexao = new mysqli($localhost, $usuario, $senha, $db);

    if($conexao -> connect_error){
        die('Erro de Conexão: ' .$conexao -> connect_error);
    }else{
        echo "";
    }
?>