<?php
require('header.php');

// maneira que o php importa o arquivo do BD.
require_once('db.php');
    
if(isset($_GET['id'])){
    // id do tabela 
 $id = $_GET['id'];
 // escreve a consulta SQL para ser executada.
 $query = "SELECT * FROM usuario where id=$id";
 
 // executa a consulta no banco e recebe os resultados.
 $result = mysqli_query($conexao, $query);
 
 // Ler todos os resultados da consulta
 $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
 $row = $rows[0];
 // var_dump($rows);
}
else{
    $row=['name'=>'', 'password'=> '', 'id'=> ''];
    $id = '';
}
?>

<section id="formulario">
    <div class="row align-items-center justify-content-center">
        <div class="col-auto">
            <form action="save.php" method="POST" class="text-right">
                <input type="hidden" value="<?= $id ?>" name="id">
                <div>
                    <label> Usuário: <input type="text" name="name" value="<?= $row['name'] ?>"> </label>
                </div>

                <div>
                    <label> Senha: <input type="password" name="password" value="<?= $row['password'] ?>"> </label>
                </div>

                <button type="submit" class="btn botaoUsers btn-sm"> Salvar </button>
            </form>
        </div>
    </div>

</section>

<?php
require('footer.php');
?>