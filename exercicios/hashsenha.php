<?php
//Função para conexão com o banco de dados.
$conexao = mysqli_connect("localhost", "root", "", "aula");

//Verificando se a conexao foi bem sucedida.
if ($conexao == false){
    echo mysqli_connect_error();
}

//Inserindo um registro na tabela.
$SQL =     "INSERT INTO usuarios (id, nome, email, user, senha) 
VALUES (NULL, 'Priscila Borniotte', 'pitty@gmail.com', 'priscilaborn', '".password_hash('admin', PASSWORD_BCRYPT)."')";

mysqli_query($conexao, $SQL);

mysql_close($conexao);