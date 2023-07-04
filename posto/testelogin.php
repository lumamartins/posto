<?php
    session_start();
    // print_r($_REQUEST);
    if(isset($_POST['submit']) && !empty($_POST['usuario']) && !empty($_POST['senha']))
    {
        // Acessa
        include_once('config.php');
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];

        // print_r('Email: ' . $email);
        // print_r('<br>');
        // print_r('Senha: ' . $senha);

        $sql = "SELECT * FROM funcionarios WHERE usuario = '$usuario' and senha = '$senha'";

        $result = $conexao->query($sql);

        // print_r($sql);
        // print_r($result);

        if(mysqli_num_rows($result) < 1)
        {
            unset($_SESSION['usuario']);
            unset($_SESSION['senha']);
            header('Location: login.php');
        }
        else
        {
            $_SESSION['usuario'] = $usuario;
            $_SESSION['senha'] = $senha;
            header('Location: sistema.php');
        }
        if (isset($_POST['remember'])){
            remember($usuario);
            rememberPass($senha);
            loginCookies();
            header('Location: sistema.php');
         }
    }
    else
    {
        // Não acessa
        header('Location: login.php');
    }
    
   function loginCookies()
   {
        $usuario = (isset($_COOKIE['posto_user'])) ? $_COOKIE['posto_user'] : '';
        $senha = (isset($_COOKIE['posto_user_pass'])) ? $_COOKIE['posto_user_pass'] : '';
   }

    function remember($usuario)
   {
    $validade = time() + 7 * 24 * 60 * 60;
    setcookie("posto_user", $usuario, $validade);
   }
    function rememberPass($senha)
   {
    $validadePass = time() + 7 * 24 * 60 * 60;
    setcookie("posto_user_pass", $senha, $validadePass);
   }
?>