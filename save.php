<?php 
    
    // var_dump($_POST);  

    require_once ('db.php');
    $name = $_POST['name'];
    $password = $_POST ['password'];
    if($name=='' || $password==''){
        header("location: form.php?error=". urlencode("Usuário ou senha em branco"));
        return;
    }
    // isset serve para verificar se a posição existe no array, e precisa ter um && ! para verificar se tem valor valido.
    // adicionar dados a tabela
    // utilizar empty( variavel) para verificar se esta vazio
    if (isset($_POST['id']) && ! empty($_POST['id']) ){
        $id = $_POST ['id'];
        //alterar dados da tabela
        $query = "update usuario set name='$name', password='$password' where id=$id";
    }
    else{
        $query = "insert into usuario ( name, password) values ('$name', '$password')";
    }    

    // executa a consulta no banco.
    mysqli_query($conexao, $query);

   
    header("location: usuarios.php?saved=1");

    
    
