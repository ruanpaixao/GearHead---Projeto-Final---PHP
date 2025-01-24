<?php
$servername = "localhost"; // endereço do servidor MySQL
$username = "root"; // seu nome no Mysql
$password = ""; 
$dbname = "gearheadof"; 

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Falha na conexão". $conn->connect_error);
}

$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$email = $_POST["email"];
$senha = $_POST["senha"];

$sql = "INSERT INTO clientes ( nome, cpf, email, senha) VALUES ( '$nome', '$cpf', '$email' '$senha')";

// Executa a consulta SQL
if ($conn->query($sql) === TRUE) {
    echo "Pedido enviado com sucesso!";
} else {
    echo "Erro ao enviar o pedido: " . $conn->error;
}

// Fecha a conexão com o banco de dados
$conn->close();
?>