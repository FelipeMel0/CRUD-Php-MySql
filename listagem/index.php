<?php
include('../componentes/header.php');

require('../conexao.php');

$sql = "SELECT * FROM tbl_pessoa";

$resultado = mysqli_query($conexao, $sql);

?>

<div class="container">

    <br />

    <table class="table table-bordered">

        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Sobrenome</th>
                <th>E-mail</th>
                <th>Celular</th>
                <th>Ações</th>
            </tr>
        </thead>

        <tbody>

            <?php

            while ($usuario = mysqli_fetch_array($resultado)) {

            ?>
                <tr>
                    <th><?php echo $usuario["cod_pessoa"] ?></th>
                    <th><?php echo $usuario["nome"] ?></th>
                    <th><?php echo $usuario["sobrenome"] ?></th>
                    <th><?php echo $usuario["email"] ?></th>
                    <th><?php echo $usuario["celular"] ?></th>
                    <th>

                        <a href="editar.php?cod_pessoa=<?php echo $usuario['cod_pessoa']?>">EDITAR</a>   
                        <a href="acoes.php?cod_pessoa=<?php echo $usuario['cod_pessoa'] . '&acao=deletar'?>">EXCLUIR</a>
                        
                    </th>
                </tr>

            <?php } ?>

        </tbody>

    </table>

</div>

<?php
include('../componentes/footer.php');
?>