<?php
    SESSION_START();
        if($_SESSION["usuario"]){
            $user = $_SESSION["usuario"];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../../../css/estilo.css">
    <link rel="icon" href="../../../img/favicon.png" sizes="16x16" type="image/png">
    <title>Buscar</title>
    <?php include_once '../../../conexao.php'; ?>
</head>
<body>
    <h2>Catálogo de Produtos</h2>
    <div id="tabela">
        <table id="listap">
        <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Preço</th>
                <th>Marca</th>
                <th>Cor</th>
                <th>Qtd</th>
                <th>Tamanho</th>
                <th>Material</th>
                <th>Altura do Salto</th>
        </tr>
    
    <?php
        $nome = $_POST["busca"];

        $consulta = "select *from tbproduto where nome LIKE '%$nome%' ";

        $executar = mysqli_query($conn,$consulta);
        $resultado = mysqli_num_rows($executar);
        
        if($resultado != 0){
         
        }
        else{
           echo "<script>
                    alert('Nenhum produto cadastrado corresponde a pesquisa.');
                    window.location.href = '../../produto.php'
                 </script>";
        }

        while ($linha = mysqli_fetch_array($executar)) {
    ?>
        <tr>
            <td><?php echo $linha['codigo']; ?></td>
            <td><?php echo $linha['nome'];?></td>
            <td><?php echo $linha['descricao'];?></td>
            <td>R$ <?php echo $linha['preco'];?></td>
            <td><?php echo $linha['marca'];?></td>
            <td><?php echo $linha['cor'];?></td>
            <td><?php echo $linha['quantidade'];?></td>
            <td><?php echo $linha['tamanho'];?></td>
            <td><?php echo $linha['material'];?></td>
            <td><?php echo $linha['altura'];?> cm</td>
        </tr>   

  <?php } ?>  
  </table>  
    <br><br>
    <a href="../../produto.php" class="botao" style="text-decoration:none">Voltar</button></a>
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