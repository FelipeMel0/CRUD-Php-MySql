<?php

require("../conexao.php");

$usuario = $_POST['txt_usuario'];
$senha = $_POST['txt_senha'];

function realizarLogin($usuario, $senha, $conexao){
    
    $sql = "SELECT * FROM tbl_administrador
    WHERE usuario = '$usuario'";
    
    $resultado = mysqli_query($conexao, $sql);
    
    $dadosUsuario = mysqli_fetch_array($resultado);

    if ($dadosUsuario !== NULL) {

        session_start();

        $_SESSION["id"] = session_id();
        $_SESSION["nome"] = $usuario;
        $_SESSION["senha"] = $senha;

        header("location: ../listagem/index.php");
        // echo "Deu certo";
    } 
    else {
        header("location: ../index.php");
        // echo "Não deu certo";
    }
}

function finalizarLogin(){
    session_unset(); //limpa todas as variáveis da sessão
    session_destroy(); //destrói a sessão ativa

    header("location: index.php");
}

if (isset($_POST['txt_usuario']) || isset($_POST['txt_senha'])) {

    $usuario = $_POST['txt_usuario'];
    $senha = $_POST['txt_senha'];

    realizarLogin($usuario, $senha, $conexao);

} else if($_GET["logout"]){

    finalizarLogin();

}

// function verificarLogin(){

//     if($_SESSION["id"] != session_id() || empty(session_id())){

//         header("location: index.php");

//     }

// }

// if (isset($_POST['logar'])) {

//     $usuario = $_POST["txt_usuario"];
//     $senha = $_POST["txt_senha"];

//     realizarLogin($usuario, $senha, $conexao);

// }