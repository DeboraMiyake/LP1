<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <link rel="icon" href="img/favicon.png" sizes="16x16" type="image/png">
    <title>Login</title>
</head>
<body>
    <div id="formulario">
        <form action="validar.php" method="POST">
        <h2>Login</h2><br/>
        <div class="linha">
                <div class="campo">
                    <label>Login</label>
                    <input type="text"name="login" style="width: 15em">
                </div>

                <div class="campo">
                    <label>Senha</label>
                    <input type="password" name="senha" style="width: 15em">
                </div>
                
                <div class="campo">
                <label>Tipo de perfil: </label>
                </div>
           
                <div class="campo">
                    <label class="perfil">ADM
                        <input type="radio" checked="checked" name="perfil" value="adm"/>
                        <span class="radio"></span>
                    </label>
                </div>

                <div class="campo">
                    <label class="perfil">USER
                        <input type="radio" checked="checked" name="perfil" value="user"/>
                        <span class="radio"></span>
                    </label>
                
                </div>
        </div>
        <button type="submit" class=botao2>Entrar</button>
        </form>
    </div>
</body>
</html>
