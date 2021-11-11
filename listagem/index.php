<?php
include('../componentes/header.php');

require('../conexao.php');

$sql = "SELECT * FROM tbl_pessoa";

$resultado = mysqli_query($conexao, $sql);

?>

<div class="container">

    <br />

    <table class="table table-bordered">

        <!-- <input type="hidden" name="acao" value="deletar" /> -->

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

                        <!-- <button class="btn btn-warning">Editar</button> -->

                        <!-- <form action="./acoes.php" method="POST" style="display: inline;">
                            <input type="hidden" name="id" value="">
                            <button class="btn btn-danger" onclick="deletar(<?= $usuario['cod_pessoa'] ?>)">Excluir</button>
                        </form> -->
                        
                    </th>
                </tr>

            <?php } ?>

            <!-- <form id="form-deletar" method="POST" action="./acoes.php">
                <input type="hidden" name="acao" value="deletar" />
                <input type="hidden" id="usuarioId" name="usuarioId" value="" />
            </form> -->

        </tbody>

    </table>

    <!-- <script lang="javascript">
        function deletar(usuarioId) {
            document.querySelector("#usuarioId").value = usuarioId;
            document.querySelector("#form-deletar").submit();
        }
    </script> -->

</div>

<?php
include('../componentes/footer.php');
?>