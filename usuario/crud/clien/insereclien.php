<?php
    if ($_POST['nome'] != ""){
        include_once '../../../conexao.php';

        $codigo = $_POST["codigo"];
        $nome = $_POST["nome"];
        $sobrenome = $_POST["sobrenome"];
        $cpf = $_POST["cpf"];
        $telefone = $_POST["telefone"];
        $dtnasc = $_POST["dtnasc"];
        $sexo = $_POST["sexo"];
        $endereco = $_POST["endereco"];
        $numero = $_POST["numero"];
        $bairro = $_POST["bairro"];
        $cidade = $_POST["cidade"];
        $uf = $_POST["uf"];

        $sql = "insert into tbcliente(nome,sobrenome,cpf,telefone,dtnasc,sexo,endereco,numero,bairro,cidade,uf) 
        values ('$nome','$sobrenome','$cpf','$telefone','$dtnasc','$sexo','$endereco','$numero','$bairro','$cidade','$uf')";

        $query = mysqli_query($conn,$sql);

        echo  "<script>
                alert('Cliente cadastrado com sucesso!');
                location.href='../../cliente.php'
               </script>";
    }else{
        echo  "<script>
                alert('FALHA! Os dados não foram cadastrados, tente novamente!');
                location.href='../../cliente.php'
               </script>";
    }

?>