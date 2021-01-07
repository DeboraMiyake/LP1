<?php
    SESSION_START();
        if($_SESSION["usuario"] && isset($_SESSION["adm"])){
            $user = $_SESSION["usuario"];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../../../css/estilo.css">
    <link rel="icon" href="../../../img/favicon.png" sizes="16x16" type="image/png">
    <title>Clientes</title>
    <?php include_once '../../../conexao.php';  ?>
</head>

<body>
    <h2>Lista de clientes</h2>
    <p>Clientes cadastrados</p>
    <div id="tabela">
        <table id="listac">
             <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Sobrenome</th>
                <th>CPF</th>
                <th>Telefone</th>
                <th>Data de Nascimento</th>
                <th>Sexo</th>
                <th>Endereço</th>
                <th>Número</th>
                <th>Bairro</th>
                <th>Cidade</th>
                <th>UF</th>
                <th colspan="2">Operações</th>
            </tr>

    <?php
        $consulta = "select *from tbcliente";
        $executar = mysqli_query($conn,$consulta);
        $resultado = mysqli_num_rows($executar);

        while ($linha = mysqli_fetch_array($executar)) {

    ?>
        <tr>
            <td><?php echo $linha['codigo']; ?></td>
            <td><?php echo $linha['nome'];?></td>
            <td><?php echo $linha['sobrenome'];?></td>
            <td><?php echo $linha['cpf'];?></td>
            <td><?php echo $linha['telefone'];?></td>
            <td><?php echo date('d/m/Y', strtotime($linha['dtnasc']));?></td>
            <td><?php echo $linha['sexo'];?></td>
            <td><?php echo $linha['endereco'];?></td>
            <td><?php echo $linha['numero'];?></td>
            <td><?php echo $linha['bairro'];?></td>
            <td><?php echo $linha['cidade'];?></td>
            <td><?php echo $linha['uf'];?></td>

            <td>
                <a href="editaclien.php?id=<?php echo $linha['codigo']; ?>">
                    <img src="../../../img/bloco.png" width="30" height="30">
                </a> 
            </td>
            <td>
                <a href="excluirclien.php?id=<?php echo $linha['codigo']; ?>">
                    <img src="../../../img/lixeira.png" width="30" height="30">
                </a>
            </td>
        </tr>   

    <?php } ?>
       </table>    
       <br><br>
       <a href="../../cliente.php" class="botao" style="text-decoration:none">Voltar</button></a>
    </div>
</body>
</html>
<?php
    }else{
        echo "<script>
                window.location.href = '../../../index.php';
              </script>";
    }
?>