<?php 
// criar conexão com o banco de dados.
$conexao = mysqli_connect('localhost','root','');

// informando qual o banco de dados vai ser utilizado
mysqli_select_db($conexao, 'crud');
