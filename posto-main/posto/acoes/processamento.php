<?php
// Conexão com o banco de dados (substitua pelos seus dados de conexão)
$conexao = mysqli_connect("localhost", "root", "", "posto");

// Verifica a conexão
if (!$conexao) {
    die("Falha na conexão com o banco de dados: " . mysqli_connect_error());
}

// Recupera os dados enviados pelo formulário
$nome_vacina = $_POST['nome_vacina'];
$fabricante = $_POST['fabricante'];
$quantidade = $_POST['quantidade'];


// Insere a vacina no banco de dados
$sql = "INSERT INTO vacina_cadastro (nome_vacina, fabricante, quantidade)VALUES (default,'$nome_vacina', '$fabricante','$quantidade' )";

if (mysqli_query($conexao, $sql)) {
    // Recupera o ID da vacina recém inserida
    $id = mysqli_insert_id($conexao);



    }