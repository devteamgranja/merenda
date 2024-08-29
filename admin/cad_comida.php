<?php
// Conexão com o banco de dados MySQL
require 'config.php';

// Verifica a conexão
if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

// Insere uma nova ação no banco de dados
$sql = "INSERT INTO acoes (acao) VALUES ('acao_clicada')";
if ($conn->query($sql) === TRUE) {
    echo "Ação cadastrada com sucesso!";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
