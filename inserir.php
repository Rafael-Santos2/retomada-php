<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'conexao.php';

if (isset($_POST['nome'])) {
    $nome = $_POST['nome'];

    $sql = "INSERT INTO magos (nome) VALUES ('$nome')";

    if (mysqli_query($conn, $sql)) {
        echo "Mago '$nome' cadastrado com sucesso!";
    } else {
        echo "Erro ao inserir: " . mysqli_error($conn);
    }

    mysqli_close($conn);
} else {
    echo "Nome não recebido.";
}
?>
<br><a href="formulario.php">Voltar</a>
