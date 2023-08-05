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
    <div class="min-vh-100">
    <table class="table mt-5">
        <tr>
            <th> Usuarios cadastrados </th>
            <th>Senha </th>
            <th> Editar </th>
            <th> Deletar</th>
        </tr>
        <?php foreach ($rows as $row): ?>
            <tr>
                <td>
                    <?= $row['name'] ?>
                </td>
                <td>
                    <?= $row['password'] ?>
                </td>
                <td> <a href="form.php?id=<?= $row['id'] ?>"><button class=" btn-edit btn-outline"> <i class="fa-solid fa-pencil"></i> </button> </a> </td>
                <td> <a href="delete.php?id=<?= $row['id'] ?>"><button class="btn-delete btn-outline"> <i class="fa-solid fa-trash-can"></i></i></button></a> </td>
        </tr>
        <?php endforeach ?>
    </table>

<?php else: ?>
    <p>Não possui bloco de código</p>
<?php endif ?>
<!-- redereciona para tela de cadastro -->

<div class="container text-center tamanhoTexto">
    <a href="form.php"><button type="button" class="btn-usuario btn-lg">Cadastrar</button></a>
    <a href="index.php"><button type="button" class="btn-usuario btn-lg">Home</button></a>
</div>
</div>
<div>
<?php
require('footer.php');
?>
</div>