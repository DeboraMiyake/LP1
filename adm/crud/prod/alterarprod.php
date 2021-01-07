<?php
    include_once '../../../conexao.php';

    $codigo = $_POST["codigo"];
    $nome = $_POST["nome"];
    $descricao = $_POST["descricao"];
    $preco = $_POST["preco"];
    $marca = $_POST["marca"];
    $cor = $_POST["cor"];
    $quantidade = $_POST["quantidade"];
    $tamanho = $_POST["tamanho"];
    $material = $_POST["material"];
    $altura = $_POST["altura"];

    $alterar = "
        update tbproduto set
        nome = '$nome',
        descricao = '$descricao',
        preco = '$preco',
        marca = '$marca',
        cor = '$cor',
        quantidade = '$quantidade',
        tamanho = '$tamanho',
        material = '$material',
        altura = '$altura'
        where 
        codigo = '$codigo';
    ";

    $executar = mysqli_query($conn,$alterar);
    if($alterar){
        echo "<script>
        alert('Dados alterados com sucesso!');
        window.location.href = 'listarprod.php'
        </script>";
    }
    else{
        echo "<script>
        alert('Dados não alterados! Tente Novamente!');
        window.location.href = 'listarprod.php'
        </script>";
    }
?>