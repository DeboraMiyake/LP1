<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../../../css/estilo.css">
    <link rel="icon" href="../../../img/favicon.png" sizes="16x16" type="image/png">
    <title>Excluir funcionário</title>
</head>
<body></body>
</html>
<?php
    include_once '../../../conexao.php';

    $codigo= $_GET["id"];

    $excluir = "delete from tbfuncionario where codigo = '$codigo'";
    $executar = mysqli_query($conn,$excluir);

    if($executar){
        echo "<script>
        alert('O funcionário cujo id=".$codigo." foi deletado com sucesso!');
        window.location.href = 'listarfunc.php'
        </script>";
    } 
    else{
        echo "<script>
        alert('Não foi possível excluir este funcionário.');
        window.location.href = 'listarfunc.php'
        </script>";
    }
?>