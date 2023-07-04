<?php

session_start();
ini_set('default_charset', 'utf-8');
if(isset($_POST['submit']))
{

        include_once('config.php');


    $nome_vacina = $_POST['nome_vacina'];
    $fabricante = $_POST['fabricante'];
    $quantidade = $_POST['quantidade'];
  


    
        // Colunas referentes a tabela pacientes 
    $result = mysqli_query($conexao, "INSERT INTO vacina_cadastro(nome_vacina,fabricante,quantidade) 
    VALUES('$nome_vacina', '$fabricante','$quantidade') ");
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro do Paciente</title>
    <script src="script.js"></script>
    <link rel="icon" type="image/png" class="icon" href="icon_cadfunn.png"/>
    <style>
        *{
            margin:0;
            padding: 0;
        }
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
            background-color: #A5CDFA;
            margin-left: 25px;
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
            border:  2px solid #A5CDFA;
            padding: 10px;
            text-align: center;
           text-decoration: none;
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
        #data_nascimento{
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
        .icon{
            height: 40px;
            width: 40px;
        }
        #submit:hover{
            background-image: linear-gradient(to right,rgb(0, 80, 172), rgb(80, 19, 195));
        }
        .date{
            background-color: #A5CDFA;
            color: whitesmoke;
        }
        .est{
            background-color: #A5CDFA;
            color: whitesmoke;
        }
    </style>
</head>
<body>

    <div class="box">
    <form action="vacina_cadastro.php" method="POST">
            <fieldset>
                <legend><b>Cadastro de Vacina</b></legend>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="nome_vacina" id="nome_vacina" class="inputUser" required>
                    <label for="nome_vacina" class="labelInput">Nome da Vacina:</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="fabricante" id="fabricante" class="inputUser"  required>
                    <label for="fabricante" class="labelInput">Fabricante</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="number" name="quantidade" id="quantidade" class="inputUser">
                    <label for="quantidade" class="labelInput" >Quantidade</label>
                    <br><br>
                </div>
                
                <br><br>
                <button type="submit" name="submit" id="submit" class="inputUser" required>Enviar</button>
                <br><br>
                
            </fieldset>
            
           
        </form>
        
    
</html>








