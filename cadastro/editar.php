<?php
include('../componentes/header.php');
include('../conexao.php');
include('./acoes.php');

$cod_pessoa = $_GET["cod_pessoa"];

$sql = "SELECT * FROM tbl_pessoa WHERE cod_pessoa = $cod_pessoa";
$resultado = mysqli_query($conexao, $sql);
$usuario = mysqli_fetch_array($resultado);

?>


<div class="container">
    <hr>
    <div class="card">
        <div class="card-header">
            <h2>Edição</h2>
        </div>
        <div class="card-body">
            <form method="post" action="">
                <input class="form-control" type="text" placeholder="Digite o nome" name="nome" id="nome" value="<?=$usuario["nome"]?>">
                <br />
                <input class="form-control" type="text" placeholder="Digite o sobrenome" name="sobrenome" id="sobrenome" value="<?=$usuario["sobrenome"]?>">
                <br />
                <input class="form-control" type="text" placeholder="Digite o email" name="email" id="email" value="<?=$usuario["email"]?>">
                <br />
                <input class="form-control" type="text" placeholder="Digite celular" name="celular" id="celular" value="<?=$usuario["celular"]?>">
                <br />
                <button class="btn btn-success" name="editar">EDITAR</button>
            </form>
        </div>
    </div>
</div>


<?php
include('../componentes/footer.php');
?>