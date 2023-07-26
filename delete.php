<?php 
    
    // var_dump($_POST);  
    // inclui o arquivo no banco de dados para estabelecer conexão
    require_once ('db.php');
    $id = $_GET['id'];
    

    // remover dados da tabela
     $query = "delete from usuario where id=$id";

    //  executa a consulta no banco.
     mysqli_query($conexao, $query);

     header("location: usuarios.php?saved=1");