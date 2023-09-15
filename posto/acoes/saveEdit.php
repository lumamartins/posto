<?php
    include_once('./config.php');
    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $sexo = $_POST['sexo'];
        $data_nasc = $_POST['data_nascimento'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $cep = $_POST['cep'];
        $rua = $_POST['rua'];
        $bairro = $_POST['bairro'];
        $numero = $_POST['numero'];
        $alergia = $_POST['alergia'];
        $descricao_alergia = $_POST['descricao_alergia'];
        
        $sqlUpdate = mysqli_query($conexao, "UPDATE pacientes 
        SET nome='$nome',email='$email',telefone='$telefone',sexo='$sexo',data_nascimento='$data_nasc',cidade='$cidade',estado='$estado',cep='$cep', rua='$rua', bairro='$bairro', numero='$numero', alergia='$alergia', descricao_alergia='$descricao_alergia'
        WHERE id= $id");
        $result = $conexao->query($sqlUpdate);
        print_r($result);
    }
    header('Location: ../cadastros/vacina_cadastro.php');
?>
