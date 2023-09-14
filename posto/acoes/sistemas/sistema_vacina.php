<!DOCTYPE html>
<html lang="en">
<head>
<?php
ini_set('default_charset', 'utf-8');
?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posto Fácil - Vacinas</title>
    <style> body{
        font-family: Arial, Helvetica, sans-serif;
    }

    .titulo{ display: flex;
  justify-content: center;
  align-items: center;

  }
        .container {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  height: 100vh; /* Defina a altura total da tela ou valor desejado */
}

.image-wrapper {
  text-align: center;
  margin-bottom: 10px; /* Espaçamento entre as imagens */
}

.image-wrapper img {
  width: 200px; /* Defina a largura desejada para as imagens */
}

.image-wrapper h3 {
  margin-top: 1px; /* Espaçamento entre a imagem e o título */
}
.inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: blue;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
            top: -50px;
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
</style>
</head>
<body>
    <main>
    <a href="sistema.php" style="text-decoration:none" name="submit" id="submit"class="inputUser">Voltar</a>
    <div class="titulo">
    
            <h1> Vacinas </h1></div>
    <div class="container">
  <div class="image-wrapper">
    <a href="\posto\cadastros\vacina_cadastro.php"><img src="imagens_sistema/vac_cad_entrada.png" alt="Imagem 1" ></a>
    <h3>Cadastro de Vacinas</h3>
  </div>
  <div class="image-wrapper">
  <a href="\posto\estoque\vacina_estoque.php"><img src="imagens_sistema/vacina_estoque.png" alt="Imagem 2"></a>
    <h3>Estoque de Vacinas</h3>
  </div>

  <div class="image-wrapper">
  <a href="/posto/cadastros/vac_cad_paciente.php"><img src="imagens_sistema/vacina_estoque.png" alt="Imagem 2"></a>
    <h3>Registro da Vacinação - Pacientes</h3>
  </div>
  <div class="image-wrapper">
  <a href="\posto\estoque\historico_vac_paciente.php"><img src="imagens_sistema/vacina_estoque.png" alt="Imagem 2"></a>
    <h3>Histórico da Vacinação - Pacientes</h3>
  </div>
</div>
    
    </main>
</body>
</html>