<?php

session_start();
ini_set('default_charset', 'utf-8');
if(isset($_POST['submit']))
{

        include_once('config.php');


    $nome = $_POST['nome'];
    $nome_comercial = $_POST['nome_comercial'];
    $dosagem = $_POST['dosagem'];
    $fabricante = $_POST['fabricante'];
    $origem = $_POST['origem'];
    $forma_farmaceutica = $_POST['forma_farmaceutica'];
    $tipo_uso = $_POST['tipo_uso'];
    $numero_registro = $_POST['numero_registro'];
    $dt_validade = $_POST['dt_validade'];
    $dt_fabricacao = $_POST['dt_fabricacao'];



    
        // Colunas referentes a tabela pacientes 
    $result = mysqli_query($conexao, "INSERT INTO medicamento_cadastro(nome, nome_cientifico, dosagem, fabricante, origem, forma_farmaceutica, tipo_uso, numero_registro, dt_validade, dt_fabricacao) 
    VALUES('$nome', '$nome_comercial','$dosagem','$fabricante','$origem','$forma_farmaceutica','$tipo_uso','$numero_registro','$dt_validade', '$dt_fabricacao') ");
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro do Medicamento</title>
    <script src="script.js"></script>
    <link rel="icon" type="image/png" class="icon" href="icon_cadfunn.png"/>
          
    <link rel="icon" type="image/png" class="icon" href="icon_cadfunn.png"/>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500&family=Open+Sans:wght@300;400;500;600&display=swap');
   
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
    </style>
</head>

<body>
<div class="container">
        <div class="form-image">
            <img id="smile" src="/posto/imagens/smile.jpg" alt="">
        </div>
        <div class="form">
            <form action="medicamento_cadastro.php" method="POST">
                <div class="form-header">
                    <div class="title">
                        <h1>Cadastro de Medicamento</h1>
                    </div>
                </div>

                <div class="input-group">
                    <div class="input-box">
                   <label for="nome" class="labelInput">Nome Cientifíco:</label>
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    </div>

                    <div class="input-box">
                    <label for="nome_comercial" class="labelInput">Nome Comercial:</label>
                    <input type="text" name="nome_comercial" id="nome_comercial" class="inputUser" required>
                    </div>
                    <div class="input-box">
                    <label for="dosagem" class="labelInput" >Dosagem</label>
                    <input type="text" name="dosagem" id="dosagem" class="inputUser" placeholder="mg/g/ml">
                    </div>

                    <div class="input-box">
                    <label for="fabricante" class="labelInput">Fabricante:</label>
                    <input type="text" name="fabricante" id="fabricante" class="inputUser" required>
                    </div>
                    <div class="input-box">
                    <label for="origem" class="labelInput">Origem</label>
                    <input type="text" name="origem" id="origem" class="inputUser" required>
                    </div>
                    <div class="input-box">
                    <label for="origem" class="labelInput">Número de registro</label>
                    <input type="text" name="numero_registro" id="numero_registro" class="inputUser" required>
                    </div>
                    <div class="gender-inputs">
                    <div class="gender-title">
                        <h6>Forma farmacêutica</h6>
                    </div>

                    <div class="gender-group">
                        <div class="gender-input">
                        <input type="radio" id="sólido" name="forma_farmaceutica" value="sólido" required>
                <label for="sólido">Sólido</label>
                        </div>

                        <div class="gender-input">
                        <input type="radio" id="semissólida" name="forma_farmaceutica" value="semissólida" required>
                <label for="semissólida">Semissólida</label>
                        </div>

                        <div class="gender-input">
                        <input type="radio" id="outro" name="forma_farmaceutica" value="líquido" required>
                <label for="líquido">Líquido</label>
                        </div>

                        <div class="gender-input">
                        <input type="radio" id="gasosa" name="forma_farmaceutica" value="gasosa" required>
                <label for="gasosa">Gasosa</label>
                        </div>
                    </div>

                    <div class="gender-inputs">
                    <div class="gender-title">
                        <h6>Tipo de Uso</h6>
                    </div>
                    <div class="gender-group">
                        <div class="gender-input">
                        <input type="radio" id="feminino" name="tipo_uso" value="via oral" required>
                <label for="tipo_uso">Via Oral</label>
                        </div>

                        <div class="gender-input">
                        <input type="radio" id="masculino" name="tipo_uso" value="via sublingual" required>
                <label for="tipo_uso">Via Sublingual</label>
                        </div>

                        <div class="gender-input">
                        <input type="radio" id="outro" name="tipo_uso" value="via parenteral" required>
                <label for="tipo_uso">Via Parenteral</label>
                        </div>

                        <div class="gender-input">
                        <input type="radio" id="nao-binario" name="tipo_uso" value="via nasal" required>
                <label for="tipo_uso">Via Nasal</label>
                        </div>
                    </div>
                </div>

                <div class="input-box">
                <label for="validade"><b>Validade: </b></label>
                <input type="date" name="dt_validade" id="dt_validade" class="date"  required>
                <div class="input-box">
                <label for="validade"><b>Fabricação: </b></label>
                <input type="date" name="dt_fabricacao" id="dt_fabricacao" class="date"  required>

</div>
<br>
                <div class="continue-button">
                <button type="submit" name="submit" id="submit" class="inputUser" required>Enviar</button>
                
                </div>
                <script src="/posto/acoes/script.js"></script>

</body>
    
</html>





