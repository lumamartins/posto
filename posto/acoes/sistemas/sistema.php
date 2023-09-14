<!DOCTYPE html>
<html lang="en">
<head>
<?php
ini_set('default_charset', 'utf-8');
?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema - Posto Fácil</title>
    <style>
     
    body{
        font-family: Arial, Helvetica, sans-serif;
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
  margin-bottom: 20px; /* Espaçamento entre as imagens */
}

.image-wrapper img {
  width: 200px; /* Defina a largura desejada para as imagens */
}

.image-wrapper h3 {
  margin-top: 1px; /* Espaçamento entre a imagem e o título */
}
#logo {
        
            border-radius: 2px;
        }
        .img1 {

width: 325px;
margin-left: -60px;
margin-top: -89px;
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
    <header>
    <a href="/posto/acoes/login.php" style="text-decoration:none" name="submit" id="submit"class="inputUser">Voltar</a>

    </header>
    <main>
    <div class="container">
  <div class="image-wrapper">
    <a href="/posto/acoes/sistemas/sistema_paciente.php"><img src="/posto/imagens_sistema/paciente_entrada.png" alt="Imagem 1" ></a>
    <h3>Área dos Pacientes</h3>
  </div>
  <div class="image-wrapper">
  <a href="/posto/acoes/sistemas/sistema_vacina.php"><img src="/posto/imagens_sistema/vacina_entrada.png" alt="Imagem 2"></a>
    <h3>Área de Vacinas</h3>
  </div>
  <div class="image-wrapper">
  <a href="/posto/acoes/sistemas/sistema_medicamento.php"><img src="/posto/imagens_sistema/medicamento_entrada.png" alt="Imagem 3"></a>
    <h3>Área de Medicamentos</h3>
  </div>
</div>
    </main>
</body>
</html>