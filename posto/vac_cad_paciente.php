<?php

session_start();
ini_set('default_charset', 'utf-8');
if(isset($_POST['submit']))
{

        include_once('config.php');


    $paciente_id = $_POST['paciente_id'];
    $paciente_nome = $_POST['paciente_nome'];
    $vacina = $_POST['vacina'];
    $data_vacinacao = $_POST['data_vacinacao'];
    
        // Colunas referentes a tabela vacina 
    $result = mysqli_query($conexao, "INSERT INTO vacinas(paciente_id,paciente_nome,vacina,data_vacinacao) 
    VALUES('$paciente_id','$paciente_nome', '$vacina','$data_vacinacao') ");
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro da Vacinação - Pacientes</title>
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
                    <input type="text" name="paciente_id" id="paciente_id" class="inputUser" required>
                    <label for="paciente_id" class="labelInput">Informe o Id do paciente cadastrado</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="paciente_nome" id="paciente_nome" class="inputUser" required>
                    <label for="paciente_nome" class="labelInput">Insira o nome do paciente cadastrado</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <label for="vacina" class="labelInput">Vacina:</label><br>
                    <select name="vacina" id="vacina" class="vac">
            <option value="">Selecione o tipo de vacina</option>
            <option value="BCG">BCG</option>
            <option value="Tetravalente">Tetravalente</option>
            <option value="Tríplice Viral -SRC">Tríplice Viral -SRC</option>
            <option value="Hepatite B">Hepatite B</option>
            <option value="Febre Amarela">Febre Amarela</option>
            <option value="Dupla Adulto - DT">Dupla Adulto - DT</option>
            <option value="Dupla Viral - SR">Dupla Viral - SR</option>
            <option value="Gripe">Gripe</option>
            <option value="Pneumonia">Pneumonia</option>
            <option value="VOP">VOP</option>
            <option value="DTP">DTP</option>
            <option value="SRC">SRC</option>
            <option value="COVID">COVID</option>
        </select>
        <br><br>
                <label for="data_vacinacao"><b>Data da Vacinação: </b></label>
                <input type="date" name="data_vacinacao" id="data_vacinacao" class="date" required>
                <br><br>
        
        
        
        <br>
        <button type="submit" name="submit" id="submit" class="inputUser" required>Enviar</button>
                <br><br>

    
</body>
</html>
