<?php
    if ($_POST['nome'] != ""){
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

        $sql = "insert into tbproduto(nome,descricao,preco,marca,cor,quantidade,tamanho,material,altura) 
        values ('$nome','$descricao','$preco','$marca','$cor','$quantidade','$tamanho','$material','$altura')";

        $query = mysqli_query($conn,$sql);

        echo  "<script>
                alert('Produto cadastrado com sucesso!');
                location.href='../../produto.php'
               </script>";
    }else{
        echo  "<script>
                alert('FALHA! Os dados não foram cadastrados, tente novamente!');
                location.href='../../produto.php'
               </script>";
    }

?>