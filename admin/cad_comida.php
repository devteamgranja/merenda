<?php
session_start();
// Conexão com o banco de dados MySQL
require 'config.php';

// Verifica a conexão
if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}
$aluno=$_SESSION['user'];
$dataatual=date('Y-m-d');
$matricula=$_SESSION['matricula'];
// Insere uma nova ação no banco de dados
$sql ="INSERT INTO merenda SET aluno='$aluno', data='$dataatual' , status=1 , observacao='000000' ,matricula='$matricula' ";
if ($conn->query($sql) === TRUE) {
    echo "Ação cadastrada com sucesso!";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
