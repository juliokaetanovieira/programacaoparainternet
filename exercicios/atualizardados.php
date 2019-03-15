<?php
//Função para conexão com o banco de dados.
$conexao = mysqli_connect("localhost", "root", "", "aula");

//Verificando se a conexao foi bem sucedida.
if ($conexao == false){
    echo mysqli_connect_error();
}

//Alterando um registro da tabela.
$retorno = mysqli_query($conexao, "UPDATE usuarios SET nome = 'Renan' WHERE id = 9");

//Verifica se o registro foi excluido.
if ($retorno <> false){
    echo "Registro atualizado com sucesso!";
}

mysql_close($conexao);