<?php

// pagina para sair do sistema onde estao salvos os dados do banco de dados dos pacientes
    session_start();
    unset($_SESSION['usuario']);
    unset($_SESSION['senha']);
    header("Location: login.php");
?>