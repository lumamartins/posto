<?php
    ini_set('default_charset', 'utf-8');
   if(isset($_POST['submit']) && !empty($_POST['usuario']) && !empty($_POST['senha']))
   {

        include_once('./acoes/config.php');
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];
        $sql = "SELECT * FROM funcionarios WHERE usuario = '$usuario' and senha = '$senha'";
        $result = $conexao->query($sql);
        if(mysqli_num_rows($result) < 1)
        {
            unset($_SESSION['usuario']);
            unset($_SESSION['senha']);
            header('Location: ./acoes/login.php');
        }
        else
        {
            //lembrar de iniciar a sessão no sistema quando o sistema ficar pronto
            $_SESSION['usuario'] = $usuario;
            $_SESSION['senha'] = $senha;
            echo '<br>';
            header('Location: posto/sistemas/sistema.php');
        }
   }
   else
   {
        header('Location: ./acoes/login.php');
   }

 ?>