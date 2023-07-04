

<?php

session_start();
ini_set('default_charset', 'utf-8');
if(isset($_POST['submit']))
{

        include_once('config.php');


    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $sexo = $_POST['genero'];
    $data_nasc = $_POST['data_nascimento'];
    $estado = $_POST['estado'];
    $cidade = $_POST['cidade'];
    $cep = $_POST['cep'];
    $rua = $_POST['rua'];
    $bairro = $_POST['bairro'];
    $numero = $_POST['numero'];
    $alergia = $_POST['alergia'];
    $descricao_alergia = $_POST['descricao_alergia'];

    
        // Colunas referentes a tabela pacientes 
    $result = mysqli_query($conexao, "INSERT INTO pacientes(nome,email,telefone,sexo,data_nascimento, cidade, estado, cep, rua, bairro, numero, alergia, descricao_alergia) 
    VALUES('$nome', '$email','$telefone', '$sexo', '$data_nasc', '$cidade', '$estado', '$cep', '$rua','$bairro','$numero','$alergia','$descricao_alergia') ");
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#cep").blur(function() {
                var cep = $(this).val();
                $.get("buscar_cep.php", {cep: cep}, function(data) {
                    if (data) {
                        var endereco = JSON.parse(data);
                        $("#rua").val(endereco.logradouro);
                        $("#bairro").val(endereco.bairro);
                    }
                });
            });
        });
    </script>
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
<main>
    <div class="box">
    <form action="cadastro_paciente.php" method="POST">
            <fieldset>
                <legend><b>Cadastro do Paciente</b></legend>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser"  required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" oninput=mascara_telefone() maxlegth="14" required>
                    <label for="telefone" class="labelInput" >Telefone</label>
                    <br><br>
                </div>
                <p>Sexo:</p>
                <br>
                <input type="radio" id="feminino" name="genero" value="feminino" required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" id="masculino" name="genero" value="masculino" required>
                <label for="masculino">Masculino</label>
                <br>
                <input type="radio" id="outro" name="genero" value="outro" required>
                <label for="outro">Outro</label>
                <br>
                <input type="radio" id="nao-binario" name="genero" value="nao-binario" required>
                <label for="Nao-Binario">Não-Binário</label>
            
                <br><br>
                <label for="data_nascimento"><b>Data de Nascimento: </b></label>
                <input type="date" name="data_nascimento" id="data_nascimento" class="date" required>
                <br><br><br>
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
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade" class="labelInput">Cidade</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="cep" id="cep" class="inputUser"  required>
                    <label for="cep" class="labelInput">CEP</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="rua" id="rua" class="inputUser" required>
                    <label for="rua" class="labelInput">Rua</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="bairro" id="bairro" class="inputUser" required>
                    <label for="bairro" class="labelInput">Bairro</label>
                </div>
            <br>
            <div class="inputBox">
                    <input type="text" name="numero" id="numero" class="inputUser" required>
                    <label for="numero" class="labelInput">Digite o número</label>
                </div>
                <br><br>
                <p>Alergia:</p>
                <br>
                <input type="radio" id="respiratória" name="alergia" value="respiratória" required>
                <label for="respiratória">Respiratória</label>
                <br>
                <input type="radio" id="pele" name="alergia" value="pele" required>
                <label for="pele">Demartológica</label>
                <br>
                <input type="radio" id="medicamentosa" name="alergia" value="medicamentosa" required>
                <label for="medicamentosa">Medicamentosa</label>
                <br>
                <input type="radio" id="ocular" name="alergia" value="ocular" required>
                <label for="ocular">Ocular</label>
                <br>
                <input type="radio" id="alimentar" name="alergia" value="alimentar" required>
                <label for="alimentar">Alimentar</label>
                <br>
                <input type="radio" id="nao" name="alergia" value="nao" required>
                <label for="nao">Não</label>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="descricao_alergia" id="descricao_alergia" class="inputUser" required>
                    <label for="descricao_alergia" class="labelInput">Especifique a alergia:</label>
                </div>
                
                
                
                <br><br>
                <button type="submit" name="submit" id="submit" class="inputUser" required>Enviar</button>
                <br><br>
                
            </fieldset>
            
           
        </form>
    </main>
    </div>
    <br><br>
    <a href="home.php" style="text-decoration:none" name="submit" id="submit"class="inputUser">Voltar</a>
    
</body>
</html>