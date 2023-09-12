<?php
// Conexão com o banco de dados 
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'posto';
$conexao = new mysqli($dbHost,$dbUsername, $dbPassword, $dbName);

if (!$conexao) {
    die("Erro na conexão com o banco de dados: " . mysqli_connect_error());
}

// Obter o CPF do formulário
$cpf = $_POST['cpf'];

// Consulta SQL para procurar o paciente pelo CPF
$sql = "SELECT nome FROM pacientes WHERE cpf = '$cpf'";

$resultado = mysqli_query($conexao, $sql);

if (!$resultado) {
    die("Erro na consulta: " . mysqli_error($conexao));
}

$response = array();

if (mysqli_num_rows($resultado) > 0) {
    $paciente = mysqli_fetch_assoc($resultado);
    $response['success'] = true;
    $response['nome'] = $paciente['nome'];
} else {
    $response['success'] = false;
}

// Fechar a conexão com o banco de dados
mysqli_close($conexao);

header('Content-Type: application/json');
echo json_encode($response);
?>