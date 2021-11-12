<?php

// session_start();

// /*Conexão com o banco de dados*/
// require("../conexao.php");

// // var_dump($_POST["acao"]);

// $acao = "";

// if (isset($_GET["acao"])) {
//     $acao = $_GET["acao"];
// }else{
//     $acao = $_POST["acao"];
// }

// switch ($_GET["acao"]) {

//     case 'inserir':

//         $nome = $_POST["nome"];
//         $sobrenome = $_POST["sobrenome"];
//         $email = $_POST["email"];
//         $celular = $_POST["celular"];

//         $sql = "INSERT INTO tbl_pessoa (nome, sobrenome, email, celular) VALUES ('$nome', '$sobrenome', '$email', '$celular')";

//         $resultado = mysqli_query($conexao, $sql);

//         header('location: ../index.php');

//     break;

// }
if (isset($_POST['editar'])) {
    $cod_pessoa = $_GET["cod_pessoa"];
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $celular = $_POST['celular'];

    $sql = "UPDATE tbl_pessoa SET cod_pessoa = '$cod_pessoa', nome = '$nome', sobrenome = '$sobrenome', email = '$email', celular = '$celular' WHERE cod_pessoa = $cod_pessoa";

    $resultado = mysqli_query($conexao, $sql);
}
