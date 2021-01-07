<?php
    if ($_POST['nome'] != ""){
        include_once '../../../conexao.php';

        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $cpf = $_POST['cpf'];
        $telefone = $_POST['telefone'];
        $endereco = $_POST['endereco'];
        $numero = $_POST['numero'];
        $bairro = $_POST['bairro'];
        $cidade = $_POST['cidade'];
        $uf = $_POST['uf'];
        $dtnasc = $_POST['dtnasc'];

        $sql = "insert into tbfuncionario(nome,sobrenome,cpf,telefone,endereco,numero,bairro,cidade,uf,dtnasc) values ('$nome','$sobrenome','$cpf','$telefone','$endereco','$numero','$bairro','$cidade','$uf','$dtnasc')";

        $query = mysqli_query($conn,$sql);

        echo  "<script>
                alert('Funcionário cadastrado com sucesso!');
                location.href='../../funcionario.php'
               </script>";
    }else{
        echo  "<script>
                alert('FALHA! Os dados não foram cadastrados, tente novamente!');
                location.href='../../funcionario.php'
               </script>";
    }

?>