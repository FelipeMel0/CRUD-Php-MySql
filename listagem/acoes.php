<?php

session_start();

/*Conexão com o banco de dados*/
require("../conexao.php");

// var_dump($_POST["acao"]);

$acao = "";

if (isset($_GET["acao"])) {
    $acao = $_GET["acao"];
}else{
    $acao = $_POST["acao"];
}

switch ($_GET["acao"]) {

    case 'deletar':

        $usuarioId = $_GET['cod_pessoa'];

        $sql = "DELETE FROM tbl_pessoa WHERE cod_pessoa = $usuarioId";

        $resultado = mysqli_query($conexao, $sql);

        header('location: index.php');

        break;

    default:
        # code...
        break;

}