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
    <title>Editar produtos</title>
    <?php include_once '../../../conexao.php';  

    $codigo= $_GET["id"];

    $consulta = "select *from tbproduto where codigo = '$codigo'";
    $executar = mysqli_query($conn,$consulta);
    $resultado = mysqli_num_rows($executar);

    while ($linha = mysqli_fetch_array($executar)) {
    ?>
</head>
    
<body>
<form action="alterarprod.php" method="POST">
        <div id="formulario">
        <h2>Cadastros de sapatos</h2><br/>
            <div class="linha">
            <div class="campo">
                    <label>Código</label>
                    <input type="text" id="codigo" name="codigo" style="width: 4em" value="<?php echo $linha['codigo'];?>" readonly>
                </div>
                <div class="campo">
                    <label>Nome do produto</label>
                    <input type="text" id="nome" name="nome" style="width: 29em" value="<?php echo $linha['nome'];?>">
                </div>
            </div>

            <div class="linha">
                <div class="campo">
                    <label>Descrição</label>
                    <input type="text" id="descricao" name="descricao" style="width: 36em" value="<?php echo $linha['descricao'];?>">
                </div>
            </div>
            <div class="linha">
                <div class="campo">
                    <label>Preço</label>
                    <input type="text" id="preco" name="preco" style="width: 13em" value="<?php echo $linha['preco'];?>">
                </div>
                <div class="campo">
                    <label>Marca</label>
                    <input type="text" id="marca" name="marca" style="width: 20em" value="<?php echo $linha['marca'];?>">
                </div>
            </div>
           
            <div class="linha">
                <div class="campo">
                    <label>Cor</label>
                    <input type="text" id="cor" name="cor" style="width: 14em" value="<?php echo $linha['cor'];?>">
                </div>
                <div class="campo">
                    <label>Quantidade</label>
                    <input type="text" id="quantidade" name="quantidade" style="width: 6em" value="<?php echo $linha['quantidade'];?>">
                </div>
                <div class="campo">
                    <label>Tamanho</label>
                    <input type="text" id="tamanho" name="tamanho" style="width: 10em" value="<?php echo $linha['tamanho'];?>">
                </div>
            </div>

            <div class="linha">
                <div class="campo">
                    <label>Material</label>
                    <input type="text" id="material" name="material" style="width: 16em" value="<?php echo $linha['material'];?>">
                </div>
                <div class="campo">
                    <label>Altura do salto</label>
                    <input type="text" id="altura" name="altura" style="width: 16em" value="<?php echo $linha['altura'];?>">
                </div>
            </div>
            <p>
            <button class="botaop" type="submit" name="submit">Enviar</button>
            <a href="listarprod.php" class="botaop" style="text-decoration:none">Listar Produtos</button></a>
            </p>
        </div>
    </form>
    <?php } ?>
</body>
</html>
<?php
    }else{
        echo "<script>
                window.location.href = '../../../index.php';
              </script>";
    }
?>