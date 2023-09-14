<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="cadastro_funcionario.php" method="POST">
            <fieldset>
                <legend><b>Medicamento prescrito</b></legend>
                <br><br>
                <div class="inputBox">
                <label for="nome" class="labelInput">CPF</label>
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    
                </div>
              <br>
                <button type="submit" name="submit" id="submit" class="inputUser" required>Enviar</button>
                <br><br>
                <a href="home.php" style="text-decoration:none" name="submit" id="submit" class="inputUser">Voltar</a>
                
            </fieldset>
        </form>
         
</body>
</html>


