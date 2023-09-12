<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $dbname = "posto";
    //Criar a conexao
    $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
    
    $pesquisar = $_POST['pesquisar'];
    $result_pacientes = "SELECT * FROM pacientes WHERE nome LIKE '%$pesquisar%' LIMIT 5";
    $resultado_pacientes = mysqli_query($conn, $result_pacientes);
    
    while($rows_pacientes = mysqli_fetch_array($resultado_pacientes)){
        echo "Nome do paciente: ".$rows_pacientes['nome']."<br>";
    }
?>