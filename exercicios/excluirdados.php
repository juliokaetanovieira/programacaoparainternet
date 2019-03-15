<?php
//Função para conexão com o banco de dados.
$conexao = mysqli_connect("localhost", "root", "", "aula");

//Verificando se a conexao foi bem sucedida.
if ($conexao == false){
    echo mysqli_connect_error();
}

//Excluindo um registro da tabela.
$retorno = mysqli_query($conexao,
    "DELETE FROM usuarios WHERE id = 6");

//Verifica se o registro foi excluido.
if ($retorno <> false){
    echo "Registro excluido!";
}

mysql_close($conexao);