<?php session_start() ?>
<!DOCTYPE html>
<html>
    <head>
            <link rel="stylesheet" type="text/css" href="estilo.css" />
    </head>
    <body>

        <div id="formulario" >
            <form action="testa.php" method="get">
                <input type="text" name="n" placeholder="Nome"/><br/>
                <input type="text" name="u" placeholder="Usuário"/><br>
                <input type="password" name="s" placeholder="Senha"/>
                <input id="senha" type="submit" value="Enviar" />
            </form>
        </div>

        <div id="login">
            <?php if(isset($_GET['login']) && $_GET['login'] == 0): ?>
                    <h2>Login falhou</h2>
            <?php    endif  ?>
        </div>
    </body>
</html>
