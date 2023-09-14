<?php
    // isset -> serve para saber se uma variável está definida
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
        $alergia = $POST['alergia'];
        $descricao_alergia['descricao_alergia'];
        
        $sqlInsert = "UPDATE pacientes 
        SET nome='$nome',email='$email',telefone='$telefone',sexo='$sexo',data_nasc='$data_nasc',cidade='$cidade',estado='$estado',cep='$cep', rua='$rua', bairro='$bairro', numero='$numero', alergia='$alergia', descricao_alergia='$descricao_alergia'
        WHERE id='$id'";
        $result = $conexao->query($sqlUpdate);
        print_r($result);
    }
    header('Location: ./sistemas/sistema_paciente.php');

?>