
<?php
    // isset -> serve para saber se uma variável está definida
    include_once('./config.php');
    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        $nome_vacina = $_POST['nome_vacina'];
        $fabricante = $_POST['fabricante'];
        $quantidade = $_POST['quantidade'];
        $lote = $_POST['lote'];
        $origem = $_POST['origem'];
        $dt_recebimento = $_POST['dt_recebimento'];
        $dt_fabricacao = $_POST['dt_fabricacao'];
        $dt_validade = $_POST['dt_validade'];
    
        
        $sqlUpdate = mysqli_query($conexao, "UPDATE vacina_cadastro 
        SET nome_vacina='$nome_vacina',fabricante='$fabricante',quantidade='$quantidade',lote='$lote',origem='$origem', dt_recebimento='$dt_recebimento', dt_fabricacao='$dt_fabricacao', dt_validade='$dt_validade'
        WHERE id= $id");
        $result = $conexao->query($sqlUpdate);
        print_r($result);
        }
     header('Location: ../cadastros/vacina_cadastro.php');

?>