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
    <title>Funcionários</title>
</head>
<body>
    <form action="crud/func/inserefunc.php" method="POST">
        <div id="formulario">
        <h2>Cadastro de funcionários</h2><br/>
            <div class="linha">
                <div class="campo">
                    <label>Nome</label>
                    <input type="text" id="nome" name="nome" style="width: 16em">
                </div>
                <div class="campo">
                    <label>Sobrenome</label>
                    <input type="text" id="sobrenome" name="sobrenome" style="width: 16em">
                </div>
            </div>

            <div class="linha">
                <div class="campo">
                    <label>CPF</label>
                    <input type="text" id="cpf" name="cpf" maxlength="11" style="width: 16em">
                </div>
                <div class="campo">
                    <label>Telefone</label>
                    <input type="text" id="telefone" name="telefone" maxlength="11" style="width: 16em">
                </div>
            </div>

            <div class="linha">
                <div class="campo">
                    <label>Endereço</label>
                    <input type="text" id="endereco" name="endereco" style="width: 16em">
                </div>

                <div class="campo">
                    <label>Número</label>
                    <input type="text" id="numero" name="numero" style="width: 3em">
                </div>
                <div class="campo">
                    <label>Bairro</label>
                    <input type="text" id="bairro" name="bairro" style="width: 10em">
                </div>
             </div>
           
            <div class="linha">
                <div class="campo">
                    <label>Cidade</label>
                    <input type="text" id="cidade" name="cidade" style="width: 16em">
                </div>
                <div class="campo">
                    <label>Estado</label>
                    <input type="text" id="uf" name="uf" style="width: 3em" maxlength="2" placeholder="UF">
                </div>
            </div>

            <div class="linha">
                <div class="campo">
                    <label>Data de Nascimento</label>
                    <input type="date" id="dtnasc" name="dtnasc" style="width: 16em">
                </div>
    
            </div>
            <p>
            <button class="botao" type="submit" name="submit">Enviar</button>
            <a href="crud/func/listarfunc.php" class="botao" style="text-decoration:none">Listar Funcionários</button></a>
            </p>
        </div>
    </form>

    <form action="crud/func/buscarfunc.php" method="post">
     <div id="formulario">
     <h2>Busca</h2><br/>   
        <div class="campo">
            <label>Digite o nome do funcionário que deseja buscar...</label>
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