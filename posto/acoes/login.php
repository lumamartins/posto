<?php
ini_set('default_charset', 'utf-8'); 
    $usuario = (isset($_COOKIE['posto_user'])) ? $_COOKIE['posto_user'] : '';
    $senha = (isset($_COOKIE['posto_user_pass'])) ? $_COOKIE['posto_user_pass'] : '';
?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Tela de Login</title>
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
#login_up{
    margin-left: 14vh;
    
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
    width: 50%;
    padding: 20px;
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
.label_password{
    padding: 15px;
    

}

.continue-button button {
    width: 100%;
    margin-top: 2.5rem;
    border: none;
    background-color: #A1C7E0;
    padding: 0.62rem;
    border-radius: 5px;
    cursor: pointer;
    margin-bottom: 10vh;
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
            <img id="smile" src="/posto/imagens/enfermeira.jpg" alt="">
        </div>
        <div class="form">
            <form action="/posto/acoes/testelogin.php" method="POST">
                <div class="form-header">
                    <div class="title">
                        <h1 id="login_up">Faça seu login </h1>
                    </div>
                    
                </div>

                <div class="input-group">
                    <div class="input-box">
                        <label for="usuario">Usuário</label>
                        <input id="usuario" type="text" name="usuario" placeholder="Digite seu usuário" required>
                    </div>

                    <div class="input-box">
                        <label for="senha">Senha</label>
                        <input id="senha" type="password" name="senha" placeholder="Digite sua senha" required>
                    </div>
                    

                </div>
                <br>
              
                <input type="radio"><label for="lembrar" class="label_password">Lembrar senha</label>

                <div class="continue-button">
                <button class="button" type="submit" name="submit">Enviar</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>

<?php

ini_set('default_charset', 'utf-8');


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['remember'])) {    
        $username = $_POST['usuario'];
        $password = $_POST['senha'];       
        $expirationDate = time() + 7 * 24 * 60 * 60;
        setcookie('username', $username, $expirationDate);
        setcookie('password', $password, $expirationDate);
    }
}


?>