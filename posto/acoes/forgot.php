<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esqueci Minha Senha</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>


</style>
<body>
    <header>
        <div class="container">
            <h2>Esqueci minha senha</h2>
            <form>
              <label for="email">Email:</label>
              <input type="email" id="email" name="email" placeholder="Digite seu email" required>
              <button type="submit">Enviar</button>
            </form>
          </div>
    </header>

    
</body>
</html>

<?php 
session_start();
ini_set('default_charset', 'utf-8');

if( !empty($_POST) ){
  // processar o pedido
  include_once('/posto/acoes/config.php');


  $email = mysqli_real_escape_string($_POST['email']);
  $q = mysqli_query("SELECT * FROM new_table WHERE email = '$email')");

  if( mysqli_num_rows($q) == 1 ){
    // o utilizador existe, vamos gerar um link único e enviá-lo para o e-mail

    // gerar a chave
    // exemplo adaptado de http://snipplr.com/view/20236/
    $chave = sha1(uniqid( mt_rand(), true));

    // guardar este par de valores na tabela para confirmar mais tarde
    $result = mysqli_query("INSERT INTO recuperacao VALUES ('$email', '$senha')");
  echo "INSERT INTO recuperacao VALUES ('$user', '$chave')";

    if( mysqli_affected_rows() == 1 ){

      $link = "http://example.net/recuperar.php?utilizador=$user&confirmacao=$chave";

      if( mail($user, 'Recuperação de password', 'Olá '.$user.', visite este link '.$link) ){
        echo '<p>Foi enviado um e-mail para o seu endereço, onde poderá encontrar um link único para alterar a sua password</p>';

      } else {
        echo '<p>Houve um erro ao enviar o email (o servidor suporta a função mail?)</p>';

      }

  // Apenas para testar o link, no caso do e-mail falhar
  echo '<p>Link: '.$link.' (apresentado apenas para testes; nunca expor a público!)</p>';

    } else {
      echo '<p>Não foi possível gerar o endereço único</p>';

    }
  } else {
  echo '<p>Esse utilizador não existe</p>';
}
} else {}
  // mostrar formulário de recuperação


?>