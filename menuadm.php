<?php
    SESSION_START();
        if($_SESSION["usuario"] && isset($_SESSION["adm"])){
            $user = $_SESSION["usuario"];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <link rel="icon" href="img/favicon.png" sizes="16x16" type="image/png">
    <title>Administrador</title>
</head>
<body>
    <div id="formulario">
    <h2>Bem vindo <a class="nome"><?php echo $user ?></a></h2>
    <p>Quem deseja administrar?</p><br>
        <div style="margin:0 auto; display:table;">
            <a href="adm/funcionario.php"><button type="submit" class="botao">Funcionário</button></a>
            <a href="adm/cliente.php"><button type="submit" class="botaoc">Cliente</button></a>
            <a href="adm/produto.php"><button type="submit" class="botaop">Produtos</button></a>
        </div>
            <br><a href="fimsessao.php" style="text-decoration:none;"><button type="submit" class="botao2" >Sair</button></a><br>    
    </div>
</body>
</html>
<?php
    }else{
        echo "<script>
                window.location.href = 'index.php';
              </script>";
    }
?>