

<?php

session_start();
ini_set('default_charset', 'utf-8');
if(isset($_POST['submit']))
{

        include_once('config.php');

    $cpf = $_POST['cpf'];   
    $nome = $_POST['nome'];
    $rg = $_POST['rg'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $sexo = $_POST['sexo'];
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
    $result = mysqli_query($conexao, "INSERT INTO pacientes(cpf,nome,rg,email,telefone,sexo,data_nascimento, cidade, estado, cep, rua, bairro, numero, alergia, descricao_alergia) 
    VALUES('$cpf','$nome','$rg', '$email','$telefone', '$sexo', '$data_nasc', '$cidade', '$estado', '$cep', '$rua','$bairro','$numero','$alergia','$descricao_alergia') ");
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
                $.get("./acoes/buscar_cep.php", {cep: cep}, function(data) {
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
     * {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: 'Inter', sans-serif;
}

body {
    width: 100%;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    background: #A1C7E0;
}

.container {
    width: 90%;
    height: 87vh;
    display: flex;
    box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.212);
    
    
    
}

.form-image {
    width: 50%;
    display: flex;
    
    justify-content: center;
    align-items: center;
    background-color: #fff;
    padding: 1rem;
}
#smile{
    width: 45%;
    height: 87vh;
    object-fit: cover;
    position: absolute;
    opacity: 0.9;
    
}

.form-image img {
    width: 31rem;
}

.form {
    width: 50%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    background-color: #fff;
    padding: 3rem;
}

.form-header {
    margin-bottom: 3rem;
    display: flex;
    justify-content: space-between;
}

.login-button {
    display: flex;
    align-items: center;
}

.login-button button {
    border: none;
    background-color: #A1C7E0;
    padding: 0.4rem 1rem;
    border-radius: 5px;
    cursor: pointer;
}

.login-button button:hover {
    background-color: #0099DD;
}

.login-button button a {
    text-decoration: none;
    font-weight: 500;
    color: #fff;
}

.form-header h1::after {
    content: '';
    display: block;
    width: 5rem;
    height: 0.3rem;
    background-color: #A1C7E0;
    margin: 0 auto;
    position: absolute;
    border-radius: 10px;
}

.input-group {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-evenly;
    padding: 1rem 0;
}

.input-box {
    display: flex;
    flex-direction: column;
    margin-bottom: 1.1rem;
    align-content: center;
}

.input-box input {
    margin: 0.6rem 0;
    padding: 0.8rem 1.2rem;
    border: none;
    border-radius: 10px;
    box-shadow: 1px 1px 6px #0000001c;
    font-size: 0.8rem;
}

.input-box input:hover {
    background-color: #eeeeee75;
}

.input-box input:focus-visible {
    outline: 1px solid #A1C7E0;
}

.input-box label,
.gender-title h6 {
    font-size: 0.75rem;
    font-weight: 600;
    color: #000000c0;
}

.input-box input::placeholder {
    color: #000000be;
}

.gender-group {
    display: flex;
    justify-content: space-between;
    margin-top: 0.62rem;
    padding: 0 .5rem;
}

.gender-input {
    display: flex;
    align-items: center;
}

.gender-input input {
    margin-right: 0.35rem;
}

.gender-input label {
    font-size: 0.81rem;
    font-weight: 600;
    color: #000000c0;
}

.continue-button button {
    width: 100%;
    margin-top: 2.5rem;
    border: none;
    background-color: #A1C7E0;
    padding: 0.62rem;
    border-radius: 5px;
    cursor: pointer;
}

.continue-button button:hover {
    background-color: #0099DD;
}

.continue-button button a {
    text-decoration: none;
    font-size: 0.93rem;
    font-weight: 500;
    color: #fff;
}

@media screen and (max-width: 1330px) {
    .form-image {
        display: none;
    }
    .container {
        width: 50%;
    }
    .form {
        width: 100%;
    }
}

@media screen and (max-width: 1064px) {
    .container {
        width: 90%;
        height: auto;
    }
    .input-group {
        flex-direction: column;
        z-index: 5;
        padding-right: 5rem;
        max-height: 10rem;
        overflow-y: scroll;
        flex-wrap: nowrap;
    }
    .gender-inputs {
        margin-top: 2rem;
    }
    .gender-group {
        flex-direction: column;
    }
    .gender-title h6 {
        margin: 0;
    }
    .gender-input {
        margin-top: 0.5rem;
    }
}
    </style>
</head>
<body>
<div class="container">
        <div class="form-image">
            <img id="smile" src="/posto/imagens/smile.jpg" alt="">
        </div>
        <div class="form">
            <form action="cadastro_pacientephp" method="POST">
                <div class="form-header">
                    <div class="title">
                        <h1>Cadastro do funcionário</h1>
                    </div>
                
                </div>

                <div class="input-group">
                    <div class="input-box">
                    <label for="cpf" class="labelInput">CPF</label>
                    <input type="text" name="cpf" id="cpf" class="inputUser" required>
                    </div>

                    <div class="input-box">
                    <label for="nome" class="labelInput">Nome completo</label>
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    </div>
                    <div class="input-box">
                    <label for="email" class="labelInput">Email</label>
                    <input type="text" name="email" id="email" class="inputUser"  required>
     
                    </div>

                    <div class="input-box">
                    <label for="telefone" class="labelInput" >Telefone</label>
                    <input type="tel" name="telefone" id="telefone" class="inputUser" oninput=mascara_telefone() maxlegth="14" required>
                    </div>


                    <div class="gender-inputs">
                    <div class="gender-title">
                        <h6>Gênero</h6>
                    </div>

                    <div class="gender-group">
                        <div class="gender-input">
                        <label for="feminino">Feminino</label>
                        <input type="radio" id="feminino" name="sexo" value="feminino" required>
             
                        </div>

                        <div class="gender-input">
                        <label for="masculino">Masculino</label>
                         <input type="radio" id="masculino" name="sexo" value="masculino" required>
            
                     
                        </div>

                        <div class="gender-input">
                        <label for="outro">Outro</label>
                        <input type="radio" id="outro" name="sexo" value="outro" required>
              
                       
                        </div>
                    </div>
                </div>
                    <div class="input-box">
                    <label for="data_nascimento"><b>Data de Nascimento: </b></label>
                <input type="date" name="data_nascimento" id="data_nascimento" class="date" required>
                    </div>
                    <div class="input-box">
                    <label for="Estado">Estado</label>
                        <input id="Estado" type="text" name="Estado" placeholder="Digite seu estado" required>
                    
                    </div>

                    <div class="input-box">
                    <label for="text">Cidade</label>
                        <input id="cidade" type="text" name="cidade" placeholder="Digite sua cidade" required>
              
                    </div>
                    <div class="input-box">
                    <label for="cep" class="labelInput">CEP</label>
                    <input type="text" name="cep" id="cep" class="inputUser"  required>
                  
               
                    </div>

                    <div class="input-box">
                    <input type="text" name="rua" id="rua" class="inputUser" required>
                    <label for="rua" class="labelInput">Rua</label>
                    
                    </div>
                    <div class="input-box">
                    <label for="bairro">Bairro</label>
                        <input id="bairro" type="text" name="bairro" placeholder="Digite seu bairro" required>
    </div>
                </div>
                <div class="input-box">

                <label for="numero">Número</label>
                        <input id="numero" type="text" name="numero" placeholder="Digite seu número" required>
    </div>

    <div class="input-box">

<label for="numero">Alergia</label>
        <input id="numero" type="text" name="numero" placeholder="" required>
</div>
<div class="input-box">

<label for="numero">Descrição:</label>
        <input id="numero" type="text" name="numero" placeholder="" required>
</div>
                <div class="continue-button">
                <button type="submit" name="submit" id="submit" class="inputUser" required>Enviar</button>
                
                </div>
            </form>
        </div>
    </div>
    
</body>
</html>

