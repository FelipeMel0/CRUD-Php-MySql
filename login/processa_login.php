<?php

include('./acoes.php');

session_start();

if (isset($_POST['txt_usuario']) || isset($_POST['txt_senha'])) {

    $usuario = $_POST['txt_usuario'];
    $senha = $_POST['txt_senha'];

}

header("location: ../listagem/index.php");