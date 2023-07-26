<?php

// criar conexão com o servidor do banco de dados.
$conexao = mysqli_connect('localhost', 'root', '');

// criar banco de dados a ser utilizado.
$query = "Create database if not exists crud";

// executa a consulta no banco.
mysqli_query($conexao, $query);

// informando qual o banco de dados vai ser utilizado
mysqli_select_db($conexao, 'crud');

// criação de tabela de usuário.
$query = 'Create table usuario( id int auto_increment not null primary key, name varchar(255), password varchar(255) )';

// executa a consulta no banco.
mysqli_query($conexao, $query);