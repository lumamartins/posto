<?php

session_start();
ini_set('default_charset', 'utf-8');
if(isset($_POST['submit']))
{

        include_once('config.php');


    $nome = $_POST['nome'];
    $nome_comercial = $_POST['nome_comercial'];
    $dosagem = $_POST['dosagem'];
    $dt_fabricacao = $_POST['dt_fabricacao'];
    $dt_validade = $_POST['dt_validade'];
    $fabricante = $_POST['fabricante'];
    $origem = $_POST['origem'];
    $forma_farmaceutica = $_POST['forma_farmaceutica'];
    $tipo_uso = $_POST['tipo_uso'];
    $numero_registro = $_POST['numero_registro'];
    $validade = $_POST['validade'];



    
        // Colunas referentes a tabela pacientes 
    $result = mysqli_query($conexao, "INSERT INTO medicamentos_cadastro(nome, nome_comercial, dosagem, dt_fabricacao, dt_validade, fabricante, origem, forma_farmaceutica, tipo_uso, numero_registro, validade) 
    VALUES('$nome', '$nome_comercial','$dosagem','$dt_fabricacao','$dt_validade','$fabricante','$origem','$forma_farmaceutica','$tipo_uso','$numero_registro','$validade') ");
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro do Medicamento</title>
    <script src="/posto/acoes/script.js"></script>
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
            top: 60%;
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

    <form action="medicamento_cadastro.php" method="POST">
          
                <legend><b>Cadastro de Medicamento</b></legend>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome Cientifíco:</label>
                </div>
                
                <br><br>
                <div class="inputBox">
                    <input type="text" name="nome_comercial" id="nome_comercial" class="inputUser" required>
                    <label for="nome_comercial" class="labelInput">Nome Comercial:</label>
                </div>
<br><br>
                <div class="inputBox">
                    <input type="text" name="dosagem" id="dosagem" class="inputUser" placeholder="mg/g/ml">
                    <label for="dosagem" class="labelInput" >Dosagem</label>
                    <br><br>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="fabricante" id="fabricante" class="inputUser" required>
                    <label for="fabricante" class="labelInput">Fabricante:</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="origem" id="origem" class="inputUser" required>
                    <label for="origem" class="labelInput">Origem</label>
                </div>
                <br>
                </div><br>
                <p>Forma farmacêutica:</p>
                <br>
                <input type="radio" id="sólido" name="forma_farmaceutica" value="sólido" required>
                <label for="sólido">Sólido</label>
                <br>
                <input type="radio" id="semissólida" name="forma_farmaceutica" value="semissólida" required>
                <label for="semissólida">Semissólida</label>
                <br>
                <input type="radio" id="outro" name="forma_farmaceutica" value="líquido" required>
                <label for="líquido">Líquido</label>
                <br>
                <input type="radio" id="gasosa" name="forma_farmaceutica" value="gasosa" required>
                <label for="gasosa">Gasosa</label>
                <br><br>
                
                
                
                
                <p>Tipo de uso:</p>
                <br>
                <input type="radio" id="feminino" name="tipo_uso" value="via oral" required>
                <label for="tipo_uso">Via Oral</label>
                <br>
                <input type="radio" id="masculino" name="tipo_uso" value="via sublingual" required>
                <label for="tipo_uso">Via Sublingual</label>
                <br>
                <input type="radio" id="outro" name="tipo_uso" value="via parenteral" required>
                <label for="tipo_uso">Via Parenteral</label>
                <br>
                <input type="radio" id="nao-binario" name="tipo_uso" value="via nasal" required>
                <label for="tipo_uso">Via Nasal</label>
                <br>
                <input type="radio" id="nao-binario" name="tipo_uso" value="via pulmonar" required>
                <label for="tipo_uso">Via Pulmonar</label>
                <br><br><br>
            
                <div class="inputBox">
                <label for="numero_registro" class="labelInput">Número de Registro (ANVISA):</label><br>
                    <input type="text" name="numero_registro" id="nome" class="inputUser" placeholder="XXXXXXXXXXXXX" required>
                   
                </div>
                <br><br>
                <label for="dt_fabricacao">Fabricação: </label>
                <input type="date" name="dt_fabricacao" id="dt_fabricacao" class="date"  required>
                <br><br>
                <br><br>
                <label for="dt_validade">Validade: </label>
                <input type="date" name="dt_validade" id="dt_validade" class="date"  required>
                <br><br><br>
            
                <button type="submit" name="submit" id="submit" class="inputUser" required>Enviar</button>
                <br><br>
                

            
           
        </form>
        <br><br>
    <a href="sistema_medicamento.php" style="text-decoration:none" name="submit" id="submit"class="inputUser">Voltar</a>
    
</html>
