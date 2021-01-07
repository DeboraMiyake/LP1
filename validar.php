<?php
    SESSION_START();
    $login = isset($_POST["login"])?strtolower($_POST["login"]):"";
    $senha = isset($_POST["senha"])?md5($_POST["senha"]):"";
    $perfil = isset($_POST["perfil"])?strtolower($_POST["perfil"]):"";
    include_once 'conexao.php';
 
    $log = mysqli_query($conn, "select *from tblogin where usuario='$login' and senha = '$senha' and perfil = '$perfil'") or die(mysql_error());
    $linha = mysqli_fetch_array($log);

    if($login == $linha["usuario"] && $senha == $linha["senha"] && $perfil == "adm"){
        $_SESSION["usuario"]=$linha["nome"];
        $_SESSION["adm"]= 1;
        echo "
            <script>
                window.location.href = 'menuadm.php';
            </script>
        ";
    }if($login == $linha["usuario"] && $senha == $linha["senha"] && $perfil == "user" ){
        $_SESSION["usuario"]=$linha["nome"];
        echo "
            <script>
                window.location.href = 'menuser.php';
            </script>
        ";
    }else{
        echo "<script>
                alert('Dados informados não correspondem. Tente novamente!');
                window.location.href = 'index.php';
            </script>";
    }


?>