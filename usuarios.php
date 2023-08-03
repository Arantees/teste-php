<?php
require('header.php');
?>

<?php
// maneira que o php importa o arquivo do BD.
require_once('db.php');

// escreve a consulta SQL para ser executada.
$query = "SELECT * FROM usuario";

// executa a consulta no banco e recebe os resultados.
$result = mysqli_query($conexao, $query);

// Ler todos os resultados da consulta
$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
// var_dump($rows);
?>

<!-- verificar se retornou os registros do BD -->
<?php if (count($rows)): ?>

    <table class="table tabela">
        <tr>
            <th> Usuarios cadastrados </th>
            <th>Senha</th>
            <th colspan="2"> Ações </th>
        </tr>
        <?php foreach ($rows as $row): ?>
            <tr>
                <td>
                    <?= $row['name'] ?>
                </td>
                <td>
                    <?= $row['password'] ?>
                </td>
                <td> <a href="form.php?id=<?= $row['id'] ?>">Editar </a> </td>
                <td> <a href="delete.php?id=<?= $row['id'] ?>"> Apagar </a> </td>
            </tr>
        <?php endforeach ?>
    </table>

    <?php else: ?>
        <p>Não possui bloco de código</p>
    <?php endif ?>
    <!-- redereciona para tela de cadastro -->
    <a href="form.php">
        <button class="btn btn-sm">Cadastrar</button>
    </a>
    <a href="index.php">
        <button class="btn btn-sm">Home</button>
    </a>


    <?php
    require('footer.php');
    ?>