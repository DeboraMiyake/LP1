<?php
    SESSION_START();
        if($_SESSION["usuario"] && isset($_SESSION["adm"])){
            $user = $_SESSION["usuario"];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../../../css/estilo.css">
    <link rel="icon" href="../../../img/favicon.png" sizes="16x16" type="image/png">
    <title>Editar clientes</title>
    <?php include_once '../../../conexao.php';  

    $codigo= $_GET["id"];

    $consulta = "select *from tbcliente where codigo = '$codigo'";
    $executar = mysqli_query($conn,$consulta);
    $resultado = mysqli_num_rows($executar);

    while ($linha = mysqli_fetch_array($executar)) {
    ?>
</head>
    
<body>
    <form action="alterarclien.php" method="POST">
    <div id="formulario">
    <h2>Editar Clientes</h2><br/>
            <div class="linha">
                <div class="campo">
                    <label>Código</label>
                    <input type="text" id="codigo" name="codigo" style="width: 1em" value="<?php echo $linha['codigo'];?>" readonly>
                </div>

                <div class="campo">
                    <label>Nome</label>
                    <input type="text" id="nome" name="nome" style="width: 14em" value="<?php echo $linha['nome'];?>">
                </div>
                <div class="campo">
                    <label>Sobrenome</label>
                    <input type="text" id="sobrenome" name="sobrenome" style="width: 14em" value="<?php echo $linha['sobrenome'];?>">
                </div>
            </div>

            <div class="linha">
                <div class="campo">
                    <label>CPF</label>
                    <input type="text" id="cpf" name="cpf" maxlength="11" style="width: 16em" value="<?php echo $linha['cpf'];?>">
                </div>
                <div class="campo">
                    <label>Telefone</label>
                    <input type="text" id="telefone" name="telefone" maxlength="11" style="width: 16em"value="<?php echo $linha['telefone'];?>">
                </div>
            </div>

            <div class="linha">
                <div class="campo">
                    <label>Data de Nascimento</label>
                    <input type="date" id="dtnasc" name="dtnasc" style="width: 16em" value="<?php echo $linha['dtnasc'];?>">
                </div>

                <div class="campo">
                    <label for="sexo">Sexo</label>
                    <select name="sexo"  id="sexo" name="sexo" style="width: 16em">   
                        <?php
                            If($linha["sexo"] == "Feminino"){
                                echo "<option value='Feminino'>Feminino</option>
                                     <option value='Masculino'>Masculino</option>";
                            }else{
                                echo "<option value='Masculino'>Masculino</option>
                                     <option value='Feminino'>Feminino</option>";
                            }
                        ?>
                    </select>
                </div>
            </div>

            <div class="linha">
                <div class="campo">
                    <label>Endereço</label>
                    <input type="text" id="endereco" name="endereco" style="width:29em" value="<?php echo $linha['endereco'];?>">
                </div>

                <div class="campo">
                    <label>Número</label>
                    <input type="text" id="numero" name="numero" style="width: 3em" value="<?php echo $linha['numero'];?>">
                </div>
             </div>
           
            <div class="linha">
                <div class="campo">
                    <label>Bairro</label>
                    <input type="text" id="bairro" name="bairro" style="width: 13em" value="<?php echo $linha['bairro'];?>">
                </div>
                <div class="campo">
                    <label>Cidade</label>
                    <input type="text" id="cidade" name="cidade" style="width: 13em" value="<?php echo $linha['cidade'];?>">
                </div>
                <div class="campo">
                    <label>Estado</label>
                    <input type="text" id="uf" name="uf" style="width: 3em" maxlength="2" placeholder="UF" value="<?php echo $linha['uf'];?>">
                </div>
            </div>

            <p>
            <button class="botaoc" type="submit" name="submit">Enviar</button>
            <a href="listarclien.php" class="botaoc" style="text-decoration:none">Listar Clientes</button></a>
            </p>
        </div>
    </form>
    <?php } ?>
</body>
</html>
<?php
    }else{
        echo "<script>
                window.location.href = '../../../index.php';
              </script>";
    }
?>