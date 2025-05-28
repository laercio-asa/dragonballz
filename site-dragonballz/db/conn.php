<?php
// Parametros para a conexao
$host = "dragonballz.mysql.dbaas.com.br";
$usuario = "dragonballz";
$senha = "Senac#tian24";
$database = "dragonballz";
// Conexão com o banco de dados
$conn = new mysqli($host, $usuario, $senha, $database);
// Tratamento de erro para a conexão
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error); //para o codigo
}

?>