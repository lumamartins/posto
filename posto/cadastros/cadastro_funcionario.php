
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
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $cep = $_POST['cep'];
    $rua = $_POST['rua'];
    $bairro = $_POST['bairro'];
    $numero = $_POST['numero'];
    $cargos = $_POST['cargos'];
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    // Colunas referentes a tabela funcionarios
    $result = mysqli_query($conexao, "INSERT INTO funcionarios(nome,email,telefone,sexo,data_nascimento,cidade,estado,cep, rua, bairro, numero, cargos,usuario, senha) 
    VALUES('$nome', '$email', '$telefone', '$sexo', '$data_nasc', '$cidade', '$estado', '$cep', '$rua','$bairro','$numero','$cargos','$usuario', '$senha' ) ");
}


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Tela de Cadastro</title>
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
            
        </div>
        <div class="form">
        <form action="cadastro_funcionario.php" method="POST">
            
                <legend><b>Cadastro do Funcionário</b></legend>
                <br><br>
                <div class="input-box">
                <label for="nome" class="labelInput">Nome completo</label>
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                   
                </div>
                <br><br>
                <div class="input-box">
                <label for="telefone" class="labelInput">Telefone</label>
                    <input type="text" name="email" id="email" class="inputUser"  required>
                   
                </div>
                <br><br>
                <div class="input-box">
                <label for="telefone" class="labelInput">Telefone</label>
                    <input type="tel" name="telefone" id="telefone" class="inputUser" oninput=mascara_telefone() maxlegth="14" required>
                   
                    <br><br>
                </div>
                <p>Sexo:</p>
            
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
                <br><br>
                <div class="input-box">
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
        <br><br><br>
                <div class="input-box">
                <label for="cidade" class="labelInput">Informe sua cidade</label>
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
      
                </div>
                
        
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
                    <label for="numero" class="labelInput">Digite o número
                    </label>
                </div>
                <br><br>
                <div class="inputBox">
                    <label for="cargos" class="labelInput">Informe seu cargo</label><br>
                    <select name="cargos" id="cargos" class="cargos">
            <option value="">Cargos</option>
            <option >Médico</option>
            <option >Enfermeiro</option>
            <option >Gerente de serviços de saúde</option>
            <option >Farmacêutico</option>
            <option >Nutricionista</option>
            <option >Psicologo</option>
            <option >Técnico em administração</option>
            <option >Recepcionista</option>
    </select>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="usuario" id="usuario" class="inputUser" required>
                    <label for="usuario" class="labelInput">Usuário</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <br><br>
                <button type="submit" name="submit" id="submit" class="inputUser" required>Enviar</button>
                <br><br>
                <a href="home.php" style="text-decoration:none" name="submit" id="submit" class="inputUser">Voltar</a>
                
                </div>
            </form>
        </div>
    </div>
</body>

</html>