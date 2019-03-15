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

//Buscando registros no banco.
mysqli_query($conexao, "SELECT * FROM usuarios");
echo "Registros encontrados: ". mysqli_affected_rows($conexao);

echo "<br>"; echo "<br>";
//Exibir registros encontrados
$resultado = mysqli_query($conexao, "SELECT * FROM usuarios");
while ($registro = mysqli_fetch_array($resultado)) {
    echo "Nome: ". $registro['nome'];
    echo "<br>";
    echo "Email: ". $registro['email'];
    echo "<br>";
    echo "<br>";
}

mysql_close($conexao);


    
    