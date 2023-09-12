<?php

session_start();
ini_set('default_charset', 'utf-8');
if(isset($_POST['submit']))
{

        include_once('/posto/acoes/config.php');


    $nome = $_POST['nome'];
    $nome_comercial = $_POST['nome_comercial'];
    $dosagem = $_POST['dosagem'];
    $fabricante = $_POST['fabricante'];
    $rua = $_POST['rua'];
    $numero = $_POST['numero'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $forma_farmaceutica = $_POST['forma_farmaceutica'];
    $tipo_uso = $_POST['tipo_uso'];
    $numero_registro = $_POST['numero_registro'];
    $validade = $_POST['validade'];



    
        // Colunas referentes a tabela pacientes 
    $result = mysqli_query($conexao, "INSERT INTO medicamentos_cadastro(nome, nome_comercial, dosagem, fabricante, rua, numero, cidade, estado, forma_farmaceutica, tipo_uso, numero_registro, validade) 
    VALUES('$nome', '$nome_comercial','$dosagem','$fabricante','$rua','$numero','$cidade','$estado','$forma_farmaceutica','$tipo_uso','$numero_registro','$validade') ");
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

    <div class="box">
    <form action="medicamento_cadastro.php" method="POST">
            <fieldset>
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
                <br>
                <div class="inputBox">
                    <input type="text" name="rua" id="rua" class="inputUser" required>
                    <label for="rua" class="labelInput">Rua</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="numero" id="numero" class="inputUser" required>
                    <label for="numero" class="labelInput">Número</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade" class="labelInput">Cidade</label>
                </div>
                <br><br>
                <div class="inputBox">
                <label for="estado" class="labelInput">Estado</label><br>
                    <select name="estado" id="estado" class="est">
            <option value="">Selecione um estado</option>
            <option value="AC">Acre</option>
            <option value="AL">Alagoas</option>
            <option value="AP">Amapá</option>
            <option value="AM">Amazonas</option>
            <option value="BA">Bahia</option>
            <option value="CE">Ceará</option>
            <option value="DF">Distrito Federal</option>
            <option value="ES">Espírito Santo</option>
            <option value="GO">Goiás</option>
            <option value="MA">Maranhão</option>
            <option value="MT">Mato Grosso</option>
            <option value="MS">Mato Grosso do Sul</option>
            <option value="MG">Minas Gerais</option>
            <option value="PA">Pará</option>
            <option value="PB">Paraíba</option>
            <option value="PR">Paraná</option>
            <option value="PE">Pernambuco</option>
            <option value="PI">Piauí</option>
            <option value="RJ">Rio de Janeiro</option>
            <option value="RN">Rio Grande do Norte</option>
            <option value="RS">Rio Grande do Sul</option>
            <option value="RO">Rondônia</option>
            <option value="RR">Roraima</option>
            <option value="SC">Santa Catarina</option>
            <option value="SP">São Paulo</option>
            <option value="SE">Sergipe</option>
            <option value="TO">Tocantins</option>
           
        </select>
                </div><br><br>
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
                    <input type="text" name="numero_registro" id="nome" class="inputUser" placeholder="XXXXXXXXXXXXX" required>
                    <label for="numero_registro" class="labelInput">Número de Registro (ANVISA):</label>
                </div>
                <br><br>
                <label for="validade"><b>Validade: </b></label>
                <input type="date" name="validade" id="validade" class="date"  required>
                <br><br><br>
            
                <button type="submit" name="submit" id="submit" class="inputUser" required>Enviar</button>
                <br><br>
                
            </fieldset>
            
           
        </form>
        <br><br>
    <a href="sistema_medicamento.php" style="text-decoration:none" name="submit" id="submit"class="inputUser">Voltar</a>
    
</html>








