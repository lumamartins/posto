<?php

// pagina para editar as informações do usuario paciente no sistema
    include_once('./config.php');

    if(!empty($_GET['id']))
    {
        $id = $_GET['id'];
        $sqlSelect = "SELECT * FROM vacina_cadastro WHERE id=$id";
        $result = $conexao->query($sqlSelect);
        if($result->num_rows > 0)
        {
            while($user_data = mysqli_fetch_assoc($result))
            {
                $nome_vacina = $user_data['nome_vacina'];
                $fabricante = $user_data['fabricante'];
                $quantidade = $user_data['quantidade'];
                $lote = $user_data['lote'];
                $origem = $user_data['origem'];
                $dt_recebimento = $user_data['dt_recebimento'];
                $dt_recebimento = $user_data['dt_fabricacao'];
                $dt_recebimento = $user_data['dt_validade'];
        }
    }
        else
        {
            header('Location: vacina_cadastro.php');
        }
    }
    else
    {
        header('Location: vacina_cadastro.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário | GN</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
        }
        .box{
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 15px;
            border-radius: 15px;
            width: 20%;
        }
        fieldset{
            border: 3px solid dodgerblue;
        }
        legend{
            border: 1px solid dodgerblue;
            padding: 10px;
            text-align: center;
            background-color: dodgerblue;
            border-radius: 8px;
        }
        .inputBox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
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
            color: dodgerblue;
        }
        #data_nascimento{
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }
        #submit{
            background-image: linear-gradient(to right,rgb(0, 92, 197), rgb(90, 20, 220));
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }
        #submit:hover{
            background-image: linear-gradient(to right,rgb(0, 80, 172), rgb(80, 19, 195));
        }
    </style>
</head>
<body>
    <a href="vacina_cadastro.php">Voltar</a>
    <div class="box">
        <form action="saveEditt.php" method="POST">
            <fieldset>
                <legend><b>Editar Vacina</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="lote" id="lote" class="inputUser" placeholder="XXXXXXX" value="<?php echo $lote?>" required>>
                    <label for="lote" class="labelInput" >Lote</label>
                    <br><br>
                </div>
                
            <br>
                <div class="inputBox">
                    <input type="text" name="nome_vacina" id="nome_vacina" class="inputUser" value="<?php echo $nome_vacina?>" required>
                    <label for="nome_vacina" class="labelInput">Nome da Vacina:</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="fabricante" id="fabricante" class="inputUser" value="<?php echo $fabricante?>" required>
                    <label for="fabricante" class="labelInput">Fabricante</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="origem" id="origem" class="inputUser" value="<?php echo $origem?>" required>
                    <label for="origem" class="labelInput">Origem</label>
                </div>
                <br><br>
            
                <label for="dt_recebimento"><b>Data do Recebimento: </b></label>
                <input type="date" name="dt_recebimento" id="dt_recebimento" class="date"  value="dt_recebimento<?php echo $dt_recebimento?>" required>
                <br><br><br>
                <br><br>
            
            <label for="dt_fabricacao"><b>Data de Fabricação: </b></label>
            <input type="date" name="dt_fabricacao" id="dt_fabricacao" class="date"  value="dt_fabricacao<?php echo $dt_fabricacao?>" required>
            <br><br><br>
            <br><br>
            
            <label for="dt_validade"><b>Data de Validade: </b></label>
            <input type="date" name="dt_validade" id="dt_validade" class="date"  value="dt_validade<?php echo $dt_validade?>" required>
            <br><br><br>
                <div class="inputBox">
                    <input type="number" name="quantidade" id="quantidade" class="inputUser"  value="<?php echo $quantidade?>" required>
                    <label for="quantidade" class="labelInput" >Quantidade</label>
                    <br><br>
                </div>
                
                <br><br>
				<input type="hidden" name="id" value=<?php echo $id;?>>
                <input type="submit" name="update" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>