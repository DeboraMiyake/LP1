<?php
    SESSION_START();
        if($_SESSION["usuario"] && isset($_SESSION["adm"])){
            $user = $_SESSION["usuario"];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../css/estilo.css">
    <link rel="icon" href="../img/favicon.png" sizes="16x16" type="image/png">
    <title>Produtos</title>
</head>
<body>
    <form action="crud/prod/insereprod.php" method="POST">
        <div id="formulario">
        <h2>Cadastros de sapatos</h2><br/>
            <div class="linha">
                <div class="campo">
                    <label>Nome do produto</label>
                    <input type="text" id="nome" name="nome" style="width: 36em">
                </div>
            </div>

            <div class="linha">
                <div class="campo">
                    <label>Descrição</label>
                    <input type="text" id="descricao" name="descricao" style="width: 36em">
                </div>
            </div>
            <div class="linha">
                <div class="campo">
                    <label>Preço</label>
                    <input type="text" id="preco" name="preco" style="width: 13em">
                </div>
                <div class="campo">
                    <label>Marca</label>
                    <input type="text" id="marca" name="marca" style="width: 20em">
                </div>
            </div>
           
            <div class="linha">
                <div class="campo">
                    <label>Cor</label>
                    <input type="text" id="cor" name="cor" style="width: 14em">
                </div>
                <div class="campo">
                    <label>Quantidade</label>
                    <input type="text" id="quantidade" name="quantidade" style="width: 6em">
                </div>
                <div class="campo">
                    <label>Tamanhos</label>
                    <input type="text" id="tamanho" name="tamanho" style="width: 10em">
                </div>
            </div>

            <div class="linha">
                <div class="campo">
                    <label>Material</label>
                    <input type="text" id="material" name="material" style="width: 20em">
                </div>
                <div class="campo">
                    <label>Altura do salto</label>
                    <input type="text" id="altura" name="altura" style="width: 12em">
                </div>
            </div>
            <p>
            <button class="botaop" type="submit" name="submit">Enviar</button>
            <a href="crud/prod/listarprod.php" class="botaop" style="text-decoration:none">Listar Produtos</button></a>
            </p>
        </div>
    </form>

    <form action="crud/prod/buscarprod.php" method="post">
     <div id="formulario">
     <h2>Busca</h2><br/>   
        <div class="campo">
            <label>Digite o nome do produto que deseja buscar...</label>
            <input type="text" name="busca" style="width: 36em">
        </div><br>
        <button type="submit" class=botao2> Buscar</button>
    </div>
    </form>
    <a href="../menuadm.php"><button type="submit" class="botao">Voltar</button></a>
</body>

</html>
<?php
    }else{
        echo "<script>
                window.location.href = '../index.php';
              </script>";
    }
?>