<?php
// maneira que o php importa o arquivo do BD.
require_once('db.php');

// escreve a consulta SQL para ser executada.
$query = "SELECT * FROM usuario";

// executa a consulta no banco e recebe os resultados.
$result = mysqli_query($conexao, $query);

// Ler todos os resultados da consulta
$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
var_dump($rows);
?>

<html>

<head>
    <meta charset="utf-8" />
    <title>Curso PHP</title>
</head>

<body>
    <br>
    <?php if (count($rows)): ?>       

      <table> 
            <tr>
                <td> Usuarios cadastrados </td>
            </tr>
            <?php foreach ($rows as $row): ?>
                <tr>
                    <td> <?= $row['name'] ?></td>
                    <td> <a href="form.php?id=<?= $row['id'] ?>"> Editar </a> </td>
                    <td> <a href="delete.php?id=<?= $row['id'] ?>"> Apagar </a> </td>
                </tr>
               <?php endforeach ?> 
        </table>

    <?php else: ?>

        <p>Não possui bloco de código</p>

    <?php endif ?>


    <br>

    <?= 'utilizando a tag de impressao' ?>

    <br>

    <? 'utilizando a tag de curta' ?>


    <a href="form.php">Nova Entidade</a>
    <a href="delete.php?id=1">Apagar</a>
</body>

</html>