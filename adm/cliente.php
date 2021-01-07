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
    <title>Clientes</title>
</head>
<body>
<form action="crud/clien/insereclien.php" method="POST">
        <div id="formulario">
        <h2>Cadastro de Clientes</h2><br/>
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
                    <label>Data de Nascimento</label>
                    <input type="date" id="dtnasc" name="dtnasc" style="width: 16em">
                </div>

                <div class="campo">
                    <label for="sexo">Sexo</label>
                    <select id="sexo" name="sexo" style="width: 16em"> 
                        <option value="Feminino">Feminino</option>
                        <option value="Masculino">Masculino</option>
                    </select>
                </div>
            </div>

            <div class="linha">
                <div class="campo">
                    <label>Endereço</label>
                    <input type="text" id="endereco" name="endereco" style="width:29em">
                </div>

                <div class="campo">
                    <label>Número</label>
                    <input type="text" id="numero" name="numero" style="width: 3em">
                </div>
             </div>
           
            <div class="linha">
                <div class="campo">
                    <label>Bairro</label>
                    <input type="text" id="bairro" name="bairro" style="width: 13em">
                </div>
                <div class="campo">
                    <label>Cidade</label>
                    <input type="text" id="cidade" name="cidade" style="width: 13em">
                </div>
                <div class="campo">
                    <label>Estado</label>
                    <input type="text" id="uf" name="uf" style="width: 3em" maxlength="2" placeholder="UF">
                </div>
            </div>

            <p>
            <button class="botaoc" type="submit" name="submit">Enviar</button>
            <a href="crud/clien/listarclien.php" class="botaoc" style="text-decoration:none">Listar Clientes</button></a>
            </p>
        </div>
    </form>

    <form action="crud/clien/buscarclien.php" method="post">
     <div id="formulario">
     <h2>Busca</h2><br/>   
        <div class="campo">
            <label>Digite o nome do cliente que deseja buscar...</label>
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