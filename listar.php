<?php
include 'conexao.php';

$sql = "SELECT nome FROM magos";
$resultado = mysqli_query($conn, $sql);

if ($resultado) {
    if (mysqli_num_rows($resultado) > 0) {
        echo "<h2>Magos cadastrados:</h2>";
        while ($linha = mysqli_fetch_assoc($resultado)) {
            echo "ID: " . $linha['id_mago'] . " | Nome: " . $linha['nome'] . "<br>";
        }
    } else {
        echo "Nenhum mago encontrado.";
    }
} else {
    echo "Erro na consulta: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
<br><a href="formulario.php">Voltar</a>
