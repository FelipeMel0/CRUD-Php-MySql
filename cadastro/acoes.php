<?php

if (isset($_POST['editar'])) {
    $cod_pessoa = $_GET["cod_pessoa"];
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $celular = $_POST['celular'];

    $sql = "UPDATE tbl_pessoa SET cod_pessoa = '$cod_pessoa', nome = '$nome', sobrenome = '$sobrenome', email = '$email', celular = '$celular' WHERE cod_pessoa = $cod_pessoa";

    $resultado = mysqli_query($conexao, $sql);
}
