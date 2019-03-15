<?php
//Função para conexão com o banco de dados.
$conexao = mysqli_connect("localhost", "root", "", "aula");

//Verificando se a conexao foi bem sucedida.
if ($conexao == false){
    echo mysqli_connect_error();
}

//Buscando o registro.
$resultado = mysqli_query($conexao, "SELECT * FROM usuarios WHERE email ='pitty@gmail.com'");
while($registro = mysqli_fetch_array($resultado)){
    if (password_verify('admin', $registro['senha'])) {
        echo "Senha correta.";
    }
    else {
        echo "Senha incorreta.";
    }
}

mysql_close($conexao);