<?php
ini_set('default_charset', 'utf-8'); 
    $usuario = (isset($_COOKIE['posto_user'])) ? $_COOKIE['posto_user'] : '';
    $senha = (isset($_COOKIE['posto_user_pass'])) ? $_COOKIE['posto_user_pass'] : '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela De Login</title>
    <link rel="stylesheet" href="style.css">
</head>




<footer></footer>
<body>
    <header></header>
    <main>
        <div class="container">
        <form action="/posto/acoes/testelogin.php" method="POST">
            <h2>Login</h2>
            <input type="text" name="usuario" id="usuario" placeholder="Nome de usuário"  value="<?php echo $usuario; ?>">
            <br>
            <input type="password" name="senha" id="senha" placeholder="Senha" value="<?php echo $senha; ?>">
            <br>
            <div class="remember-password">
                <input type="checkbox" name="remember" value="remember" id="remember"> <label for="remember">Lembrar senha</label>
            </div>
            <div class="forgot-password">
                <br>
                <a href="forgot.php" onclick="forgotPassword()">Esqueceu a senha?</a>
            </div>
            <br>
               <input class="inputSubmit" type="submit" name="submit" value="Enviar">
            </form>
            <footer></footer>
        </div>
       
    </main>
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