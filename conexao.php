<?php
// Dados de conexão
$servername = "localhost";
$username = "root";
$password = "Senai@118";
$dbname = "mago";

// Conectar
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}
?>
