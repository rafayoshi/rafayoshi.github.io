<?php

    include("conexaoMySQL.php");
    include("crud-usuario.php");

    $usuario = buscaUsuario($conexao, $_POST["username"], $_POST["pwd"]);

    if($usuario == null){
        echo "Usuário e/ou senha estão incorreto(s).";
    }
    else{
        session_start();
        setcookie("usuario", $usuario["NOME"], time() + (86400 * 30), "/"); // 86400 = 1 day
        header("Location: index.php");
    }
?>




