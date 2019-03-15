<?php
//Função para conexão com o banco de dados.
$conexao = mysqli_connect("localhost", "root", "", "aula");

//Verificando se a conexao foi bem sucedida.
if ($conexao == false){
    echo mysqli_connect_error();
}

//Inserindo um registro na tabela.
mysqli_query($conexao,
    "INSERT INTO usuarios (id, nome, email, user, senha)
    VALUES (NULL, 'Priscila Borniotte', 'pitty@gmail.com', 'priscilaborn', '12345'),
    (NULL, 'Anna Laura', 'annalaura@gmail.com', 'analaura', '123456'),
    (NULL, 'Glaucia', 'glaucia@gmail.com', 'glaucia', '1234567')");

mysql_close($conexao);