<?php
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'posto';
// Conexão com o banco de dados do posto
$conexao = new mysqli($dbHost,$dbUsername, $dbPassword, $dbName);

if($conexao->connect_errno)
{
    echo "Erro no banco!";
}

else
{
    echo "Conexão feita com sucesso!";
}
?>


