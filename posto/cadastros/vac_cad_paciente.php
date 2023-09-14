<?php

session_start();
ini_set('default_charset', 'utf-8');
if(isset($_POST['submit']))
{

        include_once('config.php');


    $paciente_id = $_POST['paciente_id'];
    $cpf = $_POST['cpf'];
    $paciente_nome = $_POST['paciente_nome'];
    $vacina = $_POST['vacina'];
    $data_vacinacao = $_POST['data_vacinacao'];
    
        // Colunas referentes a tabela vacina 
    $result = mysqli_query($conexao, "INSERT INTO vacina_paciente(paciente_id,cpf,nome,vacina,data_vacinacao) 
    VALUES('$paciente_id','$cpf','$paciente_nome', '$vacina','$data_vacinacao') ");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["submit"])) {
        $id = $_POST["id"];

        // Verifique se há doses disponíveis
        $sql = "SELECT quantidade FROM vacina_cadastro WHERE id = $id";
        $result = $conexao->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $quantidade = $row["quantidade"];

            if ($quantidade > 0) {
                // Remova uma dose da vacina do estoque
                $quantidade--;

                // Atualize o estoque no banco de dados
                $sql = "UPDATE vacina_cadastro SET quantidade = $quantidade WHERE id = $id";

                if ($conn->query($sql) === TRUE) {
                    echo "Dose removida com sucesso do estoque.";
                } else {
                    echo "Erro ao remover dose do estoque: " . $conn->error;
                }
            } else {
                echo "Não há doses disponíveis dessa vacina.";
            }
        } else {
            echo "Vacina não encontrada no estoque.";
        }
    }
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro da Vacinação - Pacientes</title>
    <script src="script.js"></script>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
            background-color: #A5CDFA;
            margin-left: 50px;
            margin-right: 50px;
            margin-top: 50px;
        }
        .box{
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 15px;
            border-radius: 15px;
            width: 20%;
        }
        fieldset{
            border: none;
        }
        legend{
            border:  2px solid white;
            padding: 10px;
            text-align: center;
          color: white;
            border-radius: 4px;
            font-size: 23px;
        }
        .inputBox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput{
            top: -20px;
            font-size: 12px;
            color: whitesmoke;
        }
        #data{
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }
        #submit{
            background-image: linear-gradient(to right,#A5CDFA, #46CDFA);
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }

        .vac{
            background-color: #A5CDFA;
            color: whitesmoke;
        }
    </style>
</head>
<body>
<div class="box">
    <form action="vac_cad_paciente.php" method="POST">
            <fieldset>
                <legend><b>Registro de Vacinação</b></legend>
                <br><br>
                <div class="inputBox">
                <form action="pesquisar_paciente.php" method="POST">
                    <input type="text" name="cpf" id="cpf" class="inputUser" required>
                    <label for="cpf" class="labelInput">Pesquisa de paciente por CPF</label>
                    <button type="submit">Pesquisar</button>
                </div>
    </form>

                <br><br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome do paciente</label>
                </div>
                <br><br>
            
                <br>
                <div class="inputBox">
                    <input type="text" name="lote" id="lote" class="inputUser" placeholder="XXXXXXX">
                    <label for="lote" class="labelInput" >Lote</label>
                    <br><br>
                </div>
         
                <label for="data_vacinacao"><b>Data da Vacinação: </b></label>
                <input type="date" name="data_vacinacao" id="data_vacinacao" class="date" required>
                <br><br>
        
                <script src="script.js"></script>
        
        <br>
        <button type="submit" name="submit" id="submit" class="inputUser" required>Enviar</button>
                <br><br>
    </form>
</body>
</html>
