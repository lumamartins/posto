<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posto Fácil - Medicamentos</title>
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
  width: 350px; /* Defina a largura desejada para as imagens */
}

.image-wrapper h3 {
  margin-top: 1px; /* Espaçamento entre a imagem e o título */
}
  .titulo{ display: flex;
  justify-content: center;
  align-items: center;


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
            top: 50px;
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
<a href="sistema.php" style="text-decoration:none" name="submit" id="submit"class="inputUser">Voltar</a>
    <div class="titulo">
            <h1> Medicamentos </h1></div>
         
            <div class="container">
  <div class="image-wrapper">
  <a href="\posto\cadastros\medicamento_cadastro.php"><img src="imagens_sistema/cadastro_medicamento.png" alt="Imagem 1" ></a>
    <h3>Cadastro de Medicamentos</h3>
  </div>
  <div class="image-wrapper">
  <a href="\posto\estoque\medicamento_estoque.php"><img src="imagens_sistema/medicamento_estoque.png" alt="Imagem 2"></a>
    <h3>Estoque de Medicamentos</h3>
  </div>
  <div class="image-wrapper">
  <a href="\posto\estoque\medicamento_prescrito.php"><img src="imagens_sistema/medicamento_estoque.png" alt="Imagem 2"></a>
    <h3>Prescrição de Medicamentos</h3>
  </div>
</div>

</body>
</html>