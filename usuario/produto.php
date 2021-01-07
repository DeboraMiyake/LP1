<?php
    SESSION_START();
        if($_SESSION["usuario"]){
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
    <form action="crud/prod/buscarprod.php" method="post">
     <div id="formulario">
     <h2>Busca</h2><br/>   
        <div class="campo">
            <label>Digite o nome do produto que deseja buscar...</label>
            <input type="text" name="busca" style="width: 36em">
        </div><br>
        <button type="submit" class=botaop> Buscar</button>
        <a href="crud/prod/listarprod.php" class="botaop" style="text-decoration:none">Todos os Produtos</a>
        <a href="../menuser.php" class="botao2" style="text-decoration:none" >Voltar</button></a>
    </div>
    </form>
</body>

</html>
<?php
    }else{
        echo "<script>
                window.location.href = '../index.php';
              </script>";
    }
?>