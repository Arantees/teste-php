<?php 
    
    var_dump($_POST);  

    require_once ('db.php');
    $name = $_POST['name'];
    $password = $_POST ['password'];

    // adicionar dados a tabela
    $query = "insert into usuario ( name, password) values ('$name', '$password')";

    // executa a consulta no banco.
    mysqli_query($conexao, $query);

    header("location: index.php?saved=1");