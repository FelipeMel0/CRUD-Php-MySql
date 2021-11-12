<?php

include('./acoes.php');

session_start();

if (isset($_POST['txt_usuario']) || isset($_POST['txt_senha']) && $_POST['txt_usuario'] !== "") {

    $usuario = $_POST['txt_usuario'];
    $senha = $_POST['txt_senha'];

    echo "Usuário: " . $usuario;
    echo "<br/>";
    echo "Senha: " . $senha;
    // header("location: ../listagem/index.php");
} else {
    header("location: ./index.php");
}

